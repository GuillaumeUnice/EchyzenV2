<?php namespace App\Http\Requests\Slide;


class SlideEditRequest extends SlideRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return parent::authorize();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
    $array = parent::rules();

    $array['imageSlide'] = 'image|max:500';
    $array['id'] = 'exists:slides,id';
		return $array;
	}

}
