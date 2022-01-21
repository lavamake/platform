<?php

namespace App\Http\Controllers;

use App\Actions\App\GenerateANewApp;
use App\Facades\ApiToken;
use App\Models\App;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Jetstream\Jetstream;

class AppController extends Controller
{
    public function index(Request $request)
    {
        return Jetstream::inertia()->render($request, 'App/Index', [
            'apps' => App::all(),
            'app' => ApiToken::generate(),
        ]);
    }

    public function create()
    {
        return Inertia::render('App/Create');
    }

    public function store(Request $request)
    {
        app(GenerateANewApp::class)->generate($request->user(), 'aaa');
    }
}
