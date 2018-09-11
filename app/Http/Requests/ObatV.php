<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObatV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required|string',
            'jenis' => 'required|string',
            'stok' => 'required|integer|max:255',
            'harga' => 'required|integer|max:255',
            'supplier' => 'required|integer|max:255',
        ];
    }
}
