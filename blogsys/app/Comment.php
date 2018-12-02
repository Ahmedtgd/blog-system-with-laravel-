<?php

namespace App;
use App\Article;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public $table="comments";
  public function article()
  {
    return $this->belongsTo('App\Article');
  }
}
