<?php

namespace Tests;

use Masonry\ServiceProvider;

it('ensures that the service provider is loaded', function () {
    $providerIsLoaded = $this->app->providerIsLoaded(ServiceProvider::class);

    $this->assertTrue($providerIsLoaded);
});
