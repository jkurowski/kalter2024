<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityFormRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|min:3|max:100',
            'footer' => '',
            'phone' => '',
            'phone2' => '',
            'address_line_1' => '',
            'address_line_2' => '',
            'lat' => '',
            'lng' => '',
            'contact_title' => 'required',
            'contact_text' => 'required'
        ];

        if ($this->input('lang') === 'pl') {
            $rules['email'] = 'required';
            $rules['active'] = 'boolean|required';
            $rules['completed'] = 'boolean|required';
        }

        return $rules;
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