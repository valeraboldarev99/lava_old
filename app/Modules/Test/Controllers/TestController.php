<?php

namespace App\Modules\Test\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Test\Models\Test;

class TestController extends Controller {

    public function index()
    {
        $items = new Test();
        return view('Test::index', ['items' => $items -> orderBy('created_at', 'desc') -> get()]);
    }
}