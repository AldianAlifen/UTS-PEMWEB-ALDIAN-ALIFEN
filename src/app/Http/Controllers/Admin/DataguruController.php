<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDataguruRequest;
use App\Http\Requests\StoreDataguruRequest;
use App\Http\Requests\UpdateDataguruRequest;
use App\Models\Dataguru;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DataguruController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('dataguru_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $datagurus = Dataguru::with(['media'])->get();

        return view('admin.datagurus.index', compact('datagurus'));
    }

    public function create()
    {
        abort_if(Gate::denies('dataguru_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.datagurus.create');
    }

    public function store(StoreDataguruRequest $request)
    {
        $dataguru = Dataguru::create($request->all());

        if ($request->input('image', false)) {
            $dataguru->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $dataguru->id]);
        }

        return redirect()->route('admin.datagurus.index');
    }

    public function edit(Dataguru $dataguru)
    {
        abort_if(Gate::denies('dataguru_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.datagurus.edit', compact('dataguru'));
    }

    public function update(UpdateDataguruRequest $request, Dataguru $dataguru)
    {
        $dataguru->update($request->all());

        if ($request->input('image', false)) {
            if (! $dataguru->image || $request->input('image') !== $dataguru->image->file_name) {
                if ($dataguru->image) {
                    $dataguru->image->delete();
                }
                $dataguru->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($dataguru->image) {
            $dataguru->image->delete();
        }

        return redirect()->route('admin.datagurus.index');
    }

    public function show(Dataguru $dataguru)
    {
        abort_if(Gate::denies('dataguru_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.datagurus.show', compact('dataguru'));
    }

    public function destroy(Dataguru $dataguru)
    {
        abort_if(Gate::denies('dataguru_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dataguru->delete();

        return back();
    }

    public function massDestroy(MassDestroyDataguruRequest $request)
    {
        $datagurus = Dataguru::find(request('ids'));

        foreach ($datagurus as $dataguru) {
            $dataguru->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('dataguru_create') && Gate::denies('dataguru_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Dataguru();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
