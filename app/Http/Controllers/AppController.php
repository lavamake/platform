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
            'apps' => App::with('user')->paginate(24)
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

    public function show(Request $request, $app_id)
    {
        return Jetstream::inertia()->render($request,'App/Show', ['app_id' => $app_id]);
    }
}
