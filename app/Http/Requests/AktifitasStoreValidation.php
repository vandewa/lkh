<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AktifitasStoreValidation extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'tanggal' => 'required',
            'kegiatan_id' => 'required',
            'durasi_menit' => 'required|max:4',
            'deskripsi' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
        ];
    }
}