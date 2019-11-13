<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {

        $app = require __DIR__.'/../bootstrap/app.php';


        $app->configure('cors');
        $app->middleware([
            Spatie\Cors\Cors::class,
        ]);
        $app->register(Spatie\Cors\CorsServiceProvider::class);


        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
