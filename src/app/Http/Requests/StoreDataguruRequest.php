<?php

namespace App\Http\Requests;

use App\Models\Dataguru;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDataguruRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dataguru_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'nip' => [
                'integer',
                'nullable',
            ],
            'mapel' => [
                'string',
                'nullable',
            ],
        ];
    }
}
