<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function index(){
        return view ('Backend.Dashboard.dashboard');
    }
}
