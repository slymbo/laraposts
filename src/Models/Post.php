<?php


namespace Slymbo\Laraposts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Slymbo\Laraposts\Database\Factories\PostFactory::new();
    }

}
