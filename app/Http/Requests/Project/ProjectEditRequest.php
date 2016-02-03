<?php namespace App\Http\Requests\Project;


class ProjectEditRequest extends ProjectRequest {

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

    $array['url_image_first'] = 'image|max:500';
    $array['url_image_title'] = 'image|max:500';
    $array['id'] = 'exists:projects,id';
		return $array;
	}

}
