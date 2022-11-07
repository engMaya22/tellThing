<?php
namespace Luci\Tpack\Controllers;

use Illuminate\Http\Request;

use Luci\Tpack\Greet;

class InspirationController
{
    public function __invoke(Greet $inspire) {
        $quote = $inspire->justDoIt();
    return view('tpack::index', compact('quote'));
    }
    // public function index(Greet $inspire) {
    //     $quote = $inspire->justDoIt();
    //   return view('tpack::index', compact('quote'));
    // }
}