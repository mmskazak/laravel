<?php

namespace App\Listeners;

use App\Models\OutlineKey;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use OutlineApiClient\OutlineApiClient;

class CreateNewOutlineKey
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $api = new OutlineApiClient('https://45.140.146.134:39854/hJIl9nobXPnWxDGY-ZJz1w');
        $accessKey = $api->create();

        $outlineKey = new OutlineKey();
        $outlineKey->key_id = $accessKey["id"];
        $outlineKey->name = $accessKey["id"];
        $outlineKey->password = $accessKey["password"];
        $outlineKey->port = $accessKey["port"];
        $outlineKey->method = $accessKey["method"];
        $outlineKey->password = $accessKey["password"];
        $outlineKey->accessUrl = $accessKey["accessUrl"];
        $outlineKey->save();
    }
}
