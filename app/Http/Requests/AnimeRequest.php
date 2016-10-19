<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimeRequest extends FormRequest
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
            'name' => 'required|max:100|unique:animes,name',
            'sinopse' => 'required|max:600',
            'genre' => 'required|max:60',
            'director' => 'required|max:30',
            'studio' => 'required|max:60',
            'status' => 'required',
            'year' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png',
        ];
    }
}
