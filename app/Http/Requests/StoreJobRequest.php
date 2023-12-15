<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
            'title' => 'required|max:255',
            'company' => 'required|max:255',
            'image' => 'nullable|image',
            'email' => 'required|max:255|email',
            'website' => 'required|max:255',
            'type' => 'required',
            'city' => 'required|max:255',
            'tags' => 'required|max:255',
            'description' => 'required|max:1000'
        ];
    }
}
