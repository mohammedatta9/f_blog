<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {   
         return [
        'name' => 'required',
        'details' => 'required',
        'image' => 'required|image',
        'meta_tags' => 'required',
        'model' => 'required',
        'category_id' => 'required',
        'status' => 'required',
        'vender_id' => 'required',
        'store_id' => 'required',
        'weight' => 'required',
        'weight_class' => 'required',

    ];
    }
}
