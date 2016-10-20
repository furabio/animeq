<?php

namespace App\Http\Requests;

use App\Anime;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class AnimesRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name' => "required|max:100|unique:animes,name",
                    'sinopse' => 'required|max:600',
                    'genre' => 'required|max:60',
                    'director' => 'required|max:30',
                    'studio' => 'required|max:60',
                    'status' => 'required',
                    'year' => 'required|integer',
                    'image' => 'required|image|mimes:jpeg,png',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                $animes = Anime::findOrFail($this->route('id'));
                return [
                    'name' => "required|max:100|unique:animes,name,{$animes->name},name",
                    'sinopse' => 'required|max:600',
                    'genre' => 'required|max:60',
                    'director' => 'required|max:30',
                    'studio' => 'required|max:60',
                    'status' => 'required',
                    'year' => 'required|integer',
                    'image' => 'image|mimes:jpeg,png',
                ];
            }
        }
    }

}
