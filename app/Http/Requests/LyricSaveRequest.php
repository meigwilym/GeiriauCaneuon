<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LyricSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'artist_id' => ['required', 'exists:artists,id'],
            'lyric' => ['required'],
            'suggested_by' => [],
        ];
    }
}
