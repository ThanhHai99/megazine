<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    public function topic() {
        return $this->hasMany("App\Topic", "id_topic", "id");
    }

    public function user() {
        return $this->belongsTo("App\User", "id_creator", "id");
    }
}
