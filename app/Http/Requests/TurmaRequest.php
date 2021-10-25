<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurmaRequest extends FormRequest
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

            'nivel'=>['required'],
            'serie'=>['bail','required','max:1','min:1'],
            'turno'=>['required'],
            'ano' =>['bail','required','min:4','max:4'],
            'escola_id'=>'required'
        ];
    }
}
