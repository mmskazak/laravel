<?php

namespace App\Http\Controllers;

use OutlineApiClient\OutlineApiClient;

class TestController extends Controller {

    public function test() {
       $api = new OutlineApiClient('https://45.140.146.134:39854/hJIl9nobXPnWxDGY-ZJz1w');
       dd($api->getKeys());
    }
}
