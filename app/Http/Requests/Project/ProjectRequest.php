<?php namespace App\Http\Requests\Project;

use App\Http\Requests\Request;

class ProjectRequest extends Request {

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
            'url_image_first'     => 'required|image|max:500',// 500 is in Ko
            'url_image_title'     => 'required|image|max:500',// 500 is in Ko
            'title'               => 'required',
            'level'               => 'required|numeric',
            'progress'            => 'numeric',
            'goal'                => 'required',
            'startDay'            => 'date',
            'endDay'              => 'date',
            'content'             => 'required'
    ];
	}

}