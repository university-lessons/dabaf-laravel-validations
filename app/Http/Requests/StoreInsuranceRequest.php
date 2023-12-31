<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInsuranceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'brand' => 'required|string',
            'model' => 'required|string',
            'description' => 'required|max:1024',
            'price' => 'required|decimal:2'
        ];
    }

    public function attributes(): array
    {
        return [
            'price' => 'orçamento'
        ];
    }
}
