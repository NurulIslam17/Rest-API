<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlatRequest extends FormRequest
{

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
            'name' => 'required',
            'project_id' => 'required',
            'size' => 'required',
            'bed' => 'required',
            'price' => 'required',
            'image' => 'nullable',
            'desc' => 'required',
        ];
    }
}
