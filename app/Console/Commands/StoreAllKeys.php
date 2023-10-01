<?php

namespace App\Console\Commands;

use App\Models\OutlineKey;
use Illuminate\Console\Command;
use OutlineApiClient\OutlineApiClient;

class StoreAllKeys extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:store-all-keys';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle() {
        $api = new OutlineApiClient('https://45.140.146.134:39854/hJIl9nobXPnWxDGY-ZJz1w');
        $allKeys = $api->getKeys();

        foreach ($allKeys as $key) {
            $outlineKey = OutlineKey::findOrMake($key["id"]);
            $outlineKey->key_id = $key["id"];
            $outlineKey->name = $key["id"];
            $outlineKey->password = $key["password"];
            $outlineKey->port = $key["port"];
            $outlineKey->method = $key["method"];
            $outlineKey->password = $key["password"];
            $outlineKey->accessUrl = $key["accessUrl"];
            $outlineKey->save();
        }
    }
}
