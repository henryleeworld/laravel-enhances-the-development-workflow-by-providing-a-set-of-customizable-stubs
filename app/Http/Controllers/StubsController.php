<?php

namespace App\Http\Controllers;

use Binafy\LaravelStub\Facades\LaravelStub;

class StubsController extends Controller
{
    public function generate()
    {
        LaravelStub::from(__DIR__ . '/stubs/controller.singleton.stub')
            ->to(__DIR__)
            ->name('NewController')
            ->ext('php')
            ->replaces([
                'namespace' => 'App\Http\Controllers',
                'rootNamespace' => 'App\\',
                'class' => 'NewController'
            ])
            ->generate();
    }
}
