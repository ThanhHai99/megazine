<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = "topic";

    public function slide() {
        return $this->hasMany("App\Slide", "id_topic", "id");
    }

    public function news() {
        return $this->hasMany("App\News", "id_topic", "id");
    }
}
