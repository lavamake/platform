<?php

namespace App\Observers;

use App\Models\App;
use Illuminate\Support\Str;

class AppObserver
{
    public function creating(App $app)
    {
        $app->unicode = $this->unicode();
    }

    private function unicode()
    {
        return Str::random(6);
    }
}
