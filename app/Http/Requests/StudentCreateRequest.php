<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nis' => 'unique:student|max:5|required',
			'name' => 'max:50|required',
			'gender' => 'required',
			'class_id' => 'required'
        ];
    }

    //mengubah atribut data output
    public function attributes(): array
        {
            return [
                'class_id' => 'class',
        ];
    }

    public function messages() 
    {
        return [
            'nis.required' => 'NIS Wajib Diisi',
            'name.required' => 'Nama Wajib Diisi',
            'gender.required' => 'Gender Wajib Diisi',
            'class_id.required' => 'Class Wajib Diisi',
            
            'nis.max' => 'NIS hanya Boleh :max Karakter'
        ];
    }
}
