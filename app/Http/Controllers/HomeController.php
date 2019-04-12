<?php

namespace App\Http\Controllers;

use App\Jobs\SendMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function deploy() {
        $user = '382995563@qq.com';

        dispatch(new SendMessage($user))->delay(10);

        return 'Email send';
    }
}
