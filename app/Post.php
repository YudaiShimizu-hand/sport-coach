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
public function getPaginateByLimit(int $limit_count = 7)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
