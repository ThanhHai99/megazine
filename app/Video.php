<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "video";

    public function topic() {
        return $this->hasMany("App\Topic", "id_topic", "id");
    }

    public function user() {
        return $this->belongsTo("App\User", "id_creator", "id");
    }
}
