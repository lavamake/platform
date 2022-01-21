<?php

namespace App\Http\Controllers\Apis\Website\Manage;

use Illuminate\Http\Request;

class AccessTokenController extends BaseController
{
    public function access_token(Request $request)
    {
        $this->validate($request,[
            'app_key' => 'required',
            'app_secret' => 'required',
            '_time' => 'required',
            'sign' => 'required'
        ]);
        $app_key = $request->get('app_key');

    }
}
