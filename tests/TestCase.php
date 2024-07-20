<?php

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use SertxuDeveloper\Icons\IconsServiceProvider;

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
