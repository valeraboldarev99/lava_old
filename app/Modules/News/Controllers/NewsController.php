<?php

namespace App\Modules\News\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\News\Models\News;

class NewsController extends Controller {

    public function index()
    {
        $items = new News();
        return view('News::index', ['items' => $items -> orderBy('created_at', 'desc') -> get()]);
    }
}