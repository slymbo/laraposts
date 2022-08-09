<?php


namespace Slymbo\Laraposts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Slymbo\Laraposts\Database\Factories\PostFactory;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * @var array
     */
    protected $fillable = [
        'content',
        'user_id',
        'post_id'
    ];

    /**
     * @return PostFactory
     */
    protected static function newFactory()
    {
        return PostFactory::new();
    }

}
