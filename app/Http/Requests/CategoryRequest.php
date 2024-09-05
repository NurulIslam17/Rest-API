<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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

        if ($this->isMethod("POST")) {
            return [
                'name'=>'required'
            ];

        }

        if ($this->isMethod("PUT") || $this->isMethod("PATCH")) {
            return [
                'name'=>'required'
            ];
        }

        return [];
    }
}
