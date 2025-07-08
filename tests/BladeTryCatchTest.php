<?php

use Azmolla\BladeTryCatch\BladeTryCatchServiceProvider;
use Illuminate\Support\Facades\Blade;

uses(Orchestra\Testbench\TestCase::class);

beforeEach(function () {
    $this->app->register(BladeTryCatchServiceProvider::class);
});

test('blade directives are compiled correctly', function () {
    $template = <<<'BLADE'
        @try
            Something risky
        @catch(\Exception $e)
            Error: {{ $e->getMessage() }}
        @finally
            Finally block
        @endtry
    BLADE;

    $compiled = Blade::compileString($template);

    expect($compiled)->toContain('try {')
        ->and($compiled)->toContain('catch \Exception $e {')
        ->and($compiled)->toContain('finally {')
        ->and($compiled)->toContain('}'); // closes
});
