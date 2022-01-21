<?php

namespace App\Actions\App;

use App\Constracts\App\GenerateApp;
use Illuminate\Support\Facades\Gate;

class GenerateANewApp implements GenerateApp
{

    public function generate($user, $app)
    {
        dd($user, $app);
//        Gate::forUser($user)->authorize('addTeamMember', $team);
    }
}
