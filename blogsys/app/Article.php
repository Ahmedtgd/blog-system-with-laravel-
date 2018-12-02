<?php

namespace App;
use App\Comment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  public $tables="articles";
  public function comments()
  {
    return $this->hasMany('App\Comment');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
