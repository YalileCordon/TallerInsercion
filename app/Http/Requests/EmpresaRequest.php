<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Puedes ajustar esto según tus necesidades de autorización
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'business_name' => 'required|string|max:5',
            'nit' => 'required|string|max:255',
            'verification_digit' => 'required|integer',
            'corporate_email' => 'required|string|email|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'number_employees' => 'required|integer',
            'registration_date' => 'required|date',
            'exporter' => 'nullable|string|max:255',
        ];
    }
}
