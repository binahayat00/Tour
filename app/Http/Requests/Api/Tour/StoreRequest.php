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
            'title.pl'=>'',
            'description.en'=>'required',
            'description.pl'=>'',
            'overview.en'=>'',
            'overview.pl'=>'',
            'contract.en'=>'string',
            'contract.pl'=>'',
            'location'=>'',
            'general_price'=>'',
            'custom_price'=>'',
            'bonus'=>'',
            'from'=>'required|datetime',
            'to'=>'required|datetime',
            // 'cover'=>'required|file',
            // 'images'=>'required',
            // 'images.*' =>'required',
            'sold_out' => 'boolean',
            'come' => 'boolean',
            'user_id' => '',
            'vehicles.*' => '',
        ];
    }
}
