<?php

namespace Luci\Tpack;

use Illuminate\Support\Facades\Http;

class Greet
 {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}