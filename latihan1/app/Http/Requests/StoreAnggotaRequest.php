<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class StoreAnggotaRequest extends FormRequest
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
        return[
            'nama' => 'required|string|min:0',
            'alamat' => 'required|string|min:0',
            'no_telp' => 'required|string|min:10',
            'tgl_lhr' => 'required|date',
        ];
        
    }

    public function messages()
    {
        return [
            'nama.required'    => 'Nama wajib diisi.',
            'alamat.required'  => 'Alamat wajib diisi.',
            'no_telp.required' => 'Nomor telepon wajib diisi.',
            'no_telp.min'      => 'Nomor telepon minimal 10 karakter.',
            'tgl_lhr.required' => 'Tanggal lahir wajib diisi.',
            'tgl_lhr.date'     => 'Format tanggal lahir tidak valid.',
        ];
    }
}