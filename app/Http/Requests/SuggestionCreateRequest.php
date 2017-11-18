<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuggestionCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorised to make this request.
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
            'lyric' => ['required'],
            'artist' => ['required'],
            'twitter' => ['required'],
        ];
    }
    
    public function messages()
    {
        return [
            'lyric.required' => 'Mae rhaid rhoi lyric',
            'artist.required' => 'Mae rhaid rhoi enw\'r artist',
            'twitter.required' => 'Mae rhaid rhoi cyfri twitter',
        ];
    }
}
