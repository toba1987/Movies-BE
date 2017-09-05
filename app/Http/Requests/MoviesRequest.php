<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {//stavili smo true jer nismo radili autorizacija
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
            'name' => 'unique:movies,name,NULL,id,releaseDate,'.request('releaseDate'),
            'director' => 'required',
            'imageUrl' => 'required',
            'duration' => 'required|between:1,500',
            'releaseDate' => 'required',
            'genres' => 'required|array'
        ];
    }
}
