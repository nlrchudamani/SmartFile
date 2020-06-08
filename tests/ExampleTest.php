<?php

namespace Nlrchudamani\SmartFile\Tests;

use Orchestra\Testbench\TestCase;
use Nlrchudamani\SmartFile\SmartFileServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SmartFileServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
