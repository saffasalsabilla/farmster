<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;

    protected $fillable = ['judul','category_id','content','img','slug','users_id'];

    public function category(){
        return $this->BelongsTo('App\Category');
    }

    public function tags(){
        return $this->BelongsToMany('App\Tags');
    }

    public function users(){
        return $this->BelongsTo('App\User');
    }
}
