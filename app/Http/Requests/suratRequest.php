<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class suratRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_surat_tugas' => 'required',
            'tanggal' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required',
            'tempat_berangkat' => 'required',
            'tempat_tujuan' => 'required',
            'uraian' => 'required',
            'mulai_berlaku' => 'required',
            'tanda_tangan_dokumen_id' => 'required',

        ];
    }
}
