<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // TABLE NAME
    protected $table = 'posts';
    // PRIMARY KEY
    public $primaryKey = 'id';
    // TIMESTAMPS
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}