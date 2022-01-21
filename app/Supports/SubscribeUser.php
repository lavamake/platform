<?php

namespace App\Supports;

use App\Models\App;
use App\Models\SubscribeType;
use Carbon\Carbon;

trait SubscribeUser
{

    /**
     * Check if this user's subscription has expired
     *
     * @return mixed
     */
    public function hasExpired()
    {
        return $this->subscribe_expired_at <= Carbon::now();
    }

    /**
     * Check if this user is subscribed
     *
     * @return bool
     */
    public function hasSubscribe()
    {
        return (bool)$this->subscribe_type_id;
    }

    public function subscribe_type()
    {
        return $this->belongsTo(SubscribeType::class);
    }

    public function apps()
    {
        return $this->hasMany(App::class);
    }

    public function app_number()
    {
        return $this->apps()->count();
    }
}
