<?php

namespace App\Model;
use Eloquent;

class Motcle extends Eloquent {
    public function news()
    {
        return $this->belongsToMany('News');
    }
}
