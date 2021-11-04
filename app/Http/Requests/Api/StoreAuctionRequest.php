<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuctionRequest extends FormRequest
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
            'name' => ['required'],
            'start_bid' => ['required'],
            'buyout_price' => ['numeric'],
            'min_bid' => ['numeric'],
            'gallery_id' => ['required'],
            'basic_information' => ['required'],
            'category_id' => ['required', 'numeric'],
            'subcategory_id' => ['required'],
            'certification_id' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
        ];
    }

//    public function messages()
//    {
//        return [
//            'category_id.required' => 'category_id required error',
//            'category_id.numeric' => 'category_id numeric error',
//        ];
//    }
}
