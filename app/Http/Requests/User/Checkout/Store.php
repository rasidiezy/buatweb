<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $expiredValid = date('Y-m', time());
        return [
            'name' => 'required|alpha',  
            'email' => 'required|email|unique:users,email,'.Auth::id().',id', 
            'pekerjaan' => 'required', 
            'nomor_kartu' => 'required|numeric|digits_between:8,16', 
            'kadaluwarsa' => 'required|date|date_format:Y-m|after_or_equal:'.$expiredValid,
            'cvc' => 'required|numeric|digits:3'
        ];
    }
}