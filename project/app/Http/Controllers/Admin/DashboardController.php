<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends AdminController
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View|Factory|Application
     */
    public function __invoke(Request $request)
    {
        return view('admin.dashboard.index');
    }
}
