<?php

namespace Tests;

use Tests\Testing\TestCase;
use Masonry\ServiceProvider;

uses(TestCase::class);

it('ensures that the service provider is loaded', function () {
    $providerIsLoaded = $this->app->providerIsLoaded(ServiceProvider::class);

    $this->assertTrue($providerIsLoaded);
});
