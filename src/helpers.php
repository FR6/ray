<?php

use Spatie\LaravelRay\Ray as LaravelRay;
use Spatie\Ray\Ray;

if (! function_exists('ray')) {
    function ray(...$args): Ray
    {
        if (class_exists(LaravelRay::class)) {
            return app(LaravelRay::class)->send(...$args);
        }

        return (new Ray())->send(...$args);

    }
}
