<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportAbuseRequest extends FormRequest
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
            'description' => 'required',
            'media_url' => 'required|file|mimes:mp4,webm,ogg,mov,jpg,jpeg,png,gif'
        ];
    }
}
