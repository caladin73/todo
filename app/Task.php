<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}


return $this->hasOne('App\Phone');
return $this->hasMany('App\Comment');
return $this->belongsToMany('App\Role');
return $this->hasManyThrough('App\Post', 'App\User');
return $this->morphMany('App\Comment', 'commentable');
return $this->morphToMany('App\Tag', 'taggable');

