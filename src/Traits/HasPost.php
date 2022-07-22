<?php

namespace Slymbo\Laraposts\Traits;

use Slymbo\Laraposts\Models\Post;

trait HasPost
{
    public function index()
    {
        return Post::all();
    }

    public function create($attributes = [])
    {
        return ;
    }

    public function update($id)
    {
        $post = Post::find($id);
        return ;
    }

    public function delete($id)
    {
        return;
    }
}
