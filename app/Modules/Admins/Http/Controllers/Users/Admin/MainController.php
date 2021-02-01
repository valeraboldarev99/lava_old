<?php

namespace App\Modules\Admins\Http\Controllers\Users\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends AdminBaseController
{
    public function index()
    {
        return view('Admins::users.admin.index');
    }
}