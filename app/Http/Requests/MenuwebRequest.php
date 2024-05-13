<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuwebRequest extends FormRequest
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
			'nama' => 'required|string',
			'caption' => 'string',
			'seq' => 'string',
			'slug' => 'string',
			'ktrg' => 'required|string',
			'ktrg1' => 'required|string',
			'title' => 'string',
			'keyword' => 'string',
			'description' => 'string',
        ];
    }
}
