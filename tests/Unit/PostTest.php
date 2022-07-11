<?php


namespace Slymbo\Laraposts\Tests\Unit;


use Tests\TestCase;
use Slymbo\Laraposts\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    function post_has_title() {

        $post = Post::factory()->create([
            'title' => 'Laravel Posts'
        ]);

        $this->assertEquals('Laravel Posts', $post->title);
    }
}
