<?php

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use SertxuDeveloper\Icons\IconsServiceProvider;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            IconsServiceProvider::class,
        ];
    }
}
