<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserControl;

class UserControlController extends Controller
{
    public function index(Request $request)
    {
        return $request->getClientIp();
    }
}
