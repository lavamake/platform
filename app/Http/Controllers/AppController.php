<?php

namespace App\Http\Controllers;

use App\Actions\App\GenerateANewApp;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        app(GenerateANewApp::class)->generate($request->user(), 'aaa');
    }
}
