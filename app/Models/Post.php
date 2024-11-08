<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", "content"];
    protected $attributes = [
        "title" => "Default Title",
        "content" => "default content"
    ];
    public function getContentAttribute($value)
    {
        return strtoupper($value);
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }


}
