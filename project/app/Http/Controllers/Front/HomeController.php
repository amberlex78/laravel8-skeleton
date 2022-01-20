<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\FrontController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends FrontController
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View|Factory|Application
     */
    public function __invoke(Request $request)
    {
        return view('front.home.index');
    }
}
