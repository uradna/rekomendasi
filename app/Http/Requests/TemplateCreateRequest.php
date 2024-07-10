<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemplateCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    // $table->id();
    // $table->foreignId('unit_id');
    // $table->string('nama');
    // $table->string('p1');
    // $table->string('p2');
    // $table->timestamps();

    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:255'],
            'p1' => ['required', 'string'],
            'p2' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama tempate tidak boleh kosong',
            'p1.required' => 'Paragraf tempate tidak boleh kosong',
            'p2.required' => 'Paragraf tempate tidak boleh kosong',
        ];
    }
}
