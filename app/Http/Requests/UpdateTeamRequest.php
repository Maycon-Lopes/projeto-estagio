<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
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
            'city' => 'required|min:3|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'contact' => 'required|email|max:255',
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'O nome do time é obrigatório.',
        'name.min' => 'O nome do time deve ter pelo menos 3 caracteres.',
        'name.max' => 'O nome do time deve ter no máximo 255 caracteres.',
        'city.required' => 'A cidade do time é obrigatória.',
        'city.min' => 'A cidade do time deve ter pelo menos 3 caracteres.',
        'city.max' => 'A cidade do time deve ter no máximo 255 caracteres.',
        'logo.required' => 'Você deve enviar uma imagem.',
        'logo.image' => 'O arquivo deve ser uma imagem.',
        'logo.max' => 'A imagem deve ter no máximo 2 MB.',
        'contact.required' => 'O email para contato é obrigatório.',
        'contact.email' => 'O email para contato deve ser um email válido.',
        'contact.max' => 'O email para contato deve ter no máximo 255 caracteres.',
    ];
}
}
