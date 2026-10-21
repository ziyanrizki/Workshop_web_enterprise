<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
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
            'kode_buku' => ['required', 'min:3'],
            'judul' => ['required', 'min:3'],
            'penulis' => ['required', 'min:3'],
            'penerbit' => ['required', 'min:3'],
            'tahun_terbit' => ['required', 'integer', 'min:1'],
            'stok' => ['required', 'integer', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'kode_buku.required' => 'Kode buku harus diisi.',
            'kode_buku.min' => 'Kode buku minimal 3 karakter.',
            'judul.required' => 'Judul buku harus diisi.',
            'judul.min' => 'Judul buku minimal 3 karakter.',
            'penulis.required' => 'Penulis harus diisi.',
            'penulis.min' => 'Penulis minimal 3 karakter.',
            'penerbit.required' => 'Penerbit harus diisi.',
            'penerbit.min' => 'Penerbit minimal 3 karakter.',
            'tahun_terbit.required' => 'Tahun terbit harus diisi.',
            'tahun_terbit.integer' => 'Tahun terbit harus berupa angka.',
            'tahun_terbit.min' => 'Tahun terbit harus lebih besar dari 0.',
            'stok.required' => 'Stok harus diisi.',
            'stok.integer' => 'Stok harus berupa angka.',
            'stok.min' => 'Stok tidak boleh kurang dari 0.',
        ];
    }
}
