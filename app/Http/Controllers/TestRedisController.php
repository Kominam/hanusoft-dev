<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LRedis;

class TestRedisController extends Controller
{
    public function send(){
    	$redis = LRedis::connection();
    	$redis->publish('message','This is test message');
    	dd('OK');
    }
}
