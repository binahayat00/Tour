<?php

namespace App\Http\Requests\Api\Tour;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title.en'=>'required',
            'title.hy'=>'required',
            'description.en'=>'required',
            'description.hy'=>'required',
            'overview.en'=>'required',
            'overview.hy'=>'required',
            'include.en'=>'required',
            'include.hy'=>'required',
            'exclude.en'=>'required',
            'exclude.hy'=>'required',
            'contract.en'=>'string',
            'contract.hy'=>'string',
            'from'=>'required|date',
            'to'=>'required|date',
            //'cover'=>'required|file',
            //'images'=>'required',
            //'images.*' =>'required',
            //'sold_out' => 'boolean',
            //'come' => 'boolean',
            'vehicles.*' => '',
        ];
    }
}
