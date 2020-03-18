<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChestProgram extends FormRequest
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
            'chestName.*' => 'required',
            'chestSet.*' => 'required',
            'chestMax.*' => 'required',
        ];
    }

    // public function messages() {
    //     return [
    //         'chestName.*.required' => 'یکی از فیلد های نام خالی است',
    //         'chestSet.*.required' => 'یکی از فیلد های ست خالی است',
    //         'chestMax.*.required' => 'یکی از فیلد های ماکسیمم خالی است'
    //     ];
    // }

    public function attributes() {

        return[
            'chestName.*' => 'chest name',
            'chestSet.*' => 'chest set',
            'chestMax.*' => 'chest max'
        ];

    }
}
