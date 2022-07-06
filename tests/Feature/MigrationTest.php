<?php


namespace Slymbo\Laraposts\Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class MigrationTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
