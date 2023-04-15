<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min:5'],
            'category' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
        ];
    }
}