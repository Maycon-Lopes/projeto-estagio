<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:255',
            'city' => 'required|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'O nome do time é obrigatório.',
        'name.min' => 'O nome do time deve ter pelo menos 3 caracteres.',
        'name.max' => 'O nome do time deve ter no máximo 255 caracteres.',
        'city.required' => 'A cidade do time é obrigatória.',
        'city.max' => 'A cidade do time deve ter no máximo 255 caracteres.',
        'logo.required' => 'Você deve enviar uma imagem.',
        'logo.image' => 'O arquivo deve ser uma imagem.',
        'logo.max' => 'A imagem deve ter no máximo 2 MB.',
    ];
}
}
