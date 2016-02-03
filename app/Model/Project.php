<?php
namespace App\Model;

use Eloquent;

class Project extends Eloquent {
    public function keywords()
    {
        return $this->belongsToMany('App\Model\Keyword');
    }
	
	public function commentProjects()
	{
		return $this->hasMany('App\Model\CommentProject');
	}
}
