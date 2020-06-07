<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = "slide";

    public function topic() {
        return $this->hasMany("App\Topic", "id_topic", "id");
    }

    public function user() {
        return $this->belongsTo("App\User", "id_creator", "id");
    }
}
