<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargoEditRequest extends FormRequest
{
    /**
     * Determine if the cargo is authorized to make this request.
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
        $cargo = $this->route('cargo');
        return [
            'codigo' => 'required|unique:cargos|min(5)',

            'nombre' => 'required'
        ];
    }
}
