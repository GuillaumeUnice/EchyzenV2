<?php namespace App\Http\Requests\Slide;

use App\Http\Requests\Request;

class SlideRequest extends Request {

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
            'imageSlide' => 'required|image|max:500'// 500 is in Ko
		];
	}

}
