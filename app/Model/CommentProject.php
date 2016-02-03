<?php
namespace App\Model;

use Eloquent;

class CommentProject extends Eloquent {

	public function project()
	{
		return $this->belongsTo('App\Model\Project');
	}
	
}
