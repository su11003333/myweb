<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsCreateRequest extends FormRequest
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
            //
            'title'=>'required',
            'body'=>'required',
            'banner'=>'required'

        ];

        $features = count($this->input('feature'));
        foreach(range(0, $features) as $index) {
            $rules['features.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';
        }

        return $rules;

    }
}
