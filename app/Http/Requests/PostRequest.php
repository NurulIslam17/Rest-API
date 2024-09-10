<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->isMethod("PUT")) {
            return [
                'user_id' => 'required',
                'category_id' => 'required',
                'title' => 'required',
                'desc' => 'required'
            ];
        }

        return [
            'user_id' => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'desc' => 'required'
        ];
    }
}
