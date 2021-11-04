<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAuctionRequest extends FormRequest
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
            'auction_id' => ['required'],
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
}
