<?php

namespace App\Model;
use Eloquent;

class Keyword extends Eloquent {
	
	protected $fillable = array('name');
	
    public function projects()
    {
        return $this->belongsToMany('App\Model\Project');
    }
}
