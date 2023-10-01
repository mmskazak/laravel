<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OutlineApiClient\OutlineApiClient;

class OutlineKey extends Model {
    use HasFactory;

    public function create(): void {

        $api = new OutlineApiClient('sjdfioj');
        $accessKey = $api->create();

        $outlineKey = new self();
        $outlineKey->id = $accessKey["id"];
        $outlineKey->name = $accessKey["name"];
        $outlineKey->password = $accessKey["password"];
        $outlineKey->port = $accessKey["port"];
        $outlineKey->method = $accessKey["method"];
        $outlineKey->accessUrl = $accessKey["accessUrl"];
        $outlineKey->save();
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteById(int $id): bool {
        return (bool)(self::findOrFail($id))->delete();
    }
}
