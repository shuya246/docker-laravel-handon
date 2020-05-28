<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'title' => 'required|max:100',
            'introduction' => 'required',
            'body' => 'required',
            'time' => 'required|int',
            'start' =>'required|date|after_or_equal:today',
            'end' => 'required|date|after_or_equal:today'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください。',
            'introduction.required' => '説明を入力してください。',
            'body.required' => '本文を入力してください。',
            'time' => '半角数字を入力してください。',
            'start' => '本日以降の日付を入力してください。',
        ];
    }
}
