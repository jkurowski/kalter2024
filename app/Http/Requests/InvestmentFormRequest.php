<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestmentFormRequest extends FormRequest
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
            'type' => 'integer',
            'status' => 'integer',
            'progress' => 'integer',
            'name' => 'required|string|min:5|max:100',
            'address' => '',
            'city_id' => '',
            'gallery_id' => '',
            'date_start' => '',
            'date_end' => '',
            'areas_amount' => '',
            'area_range' => '',
            'floor_range' => '',
            'room_range' => '',
            'office_address' => '',
            'office_emails' => 'required',
            'meta_title' => '',
            'meta_description' => '',
            'meta_robots' => '',
            'gradient_thumb' => '',
            'gradient_header' => '',
            'entry_content' => '',
            'commercial' => '',
            'content' => '',
            'end_content' => '',
            'contact_content' => '',
            'menu' => '',
            'mockup' => '',
            'show_prices' => 'boolean',
            'show_properties' => 'integer',
            'users' => '',
            'supervisors' => '',
            'file_brochure' => ''
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'To pole jest wymagane',
            'name.max.string' => 'Maksymalna ilość znaków: 100',
            'name.min.string' => 'Minimalna ilość znaków: 5'
        ];
    }
}
