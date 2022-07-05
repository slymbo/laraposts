<?php
/**
 *
 * Test case of the provider
 *
 */
declare(strict_types=1);


namespace Slymbo\Laraposts\Tests;

use Slymbo\Laraposts\Providers\LarapostsServiceProvider;
use Tests\TestCase;

class TestProvider extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            LarapostsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
