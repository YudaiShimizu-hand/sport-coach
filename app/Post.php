<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = [
    'name',
    'body',
    'user_id',
    'category_id',
    'coach',
];

public function user()
{
    return $this->belongsTo('App\User');
}
public function category()
{
    return $this->belongsTo('App\Category');
}
}
