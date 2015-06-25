<?php namespace App\Http\Requests;


class RegisterRequest extends Request {

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
            'username' => 'required|min:2|max:60:|unique:users,username|regex:/^[a-zA-Z\_\- ]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:60|confirmed',
		];
	}

}
