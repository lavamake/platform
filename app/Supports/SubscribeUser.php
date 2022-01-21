<?php

namespace App\Supports;

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
}
