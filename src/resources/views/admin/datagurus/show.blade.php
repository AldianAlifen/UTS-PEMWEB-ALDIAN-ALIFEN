@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.dataguru.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.datagurus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.dataguru.fields.id') }}
                        </th>
                        <td>
                            {{ $dataguru->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataguru.fields.image') }}
                        </th>
                        <td>
                            @if($dataguru->image)
                                <a href="{{ $dataguru->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $dataguru->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataguru.fields.name') }}
                        </th>
                        <td>
                            {{ $dataguru->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataguru.fields.nip') }}
                        </th>
                        <td>
                            {{ $dataguru->nip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataguru.fields.mapel') }}
                        </th>
                        <td>
                            {{ $dataguru->mapel }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.datagurus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection