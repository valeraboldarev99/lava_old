<?php

namespace App\Modules\Admins\Http\Controllers\Users\Admin;

use Illuminate\Http\Request;
use App\Modules\Admins\Http\Controllers\Users\BaseController as MainBaseController;

abstract class AdminBaseController extends MainBaseController
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('status');
    }


}