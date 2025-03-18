<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class PrincipalController extends Controller
{
    public function principal(): View|Factory
    {
        return view(view: "site.principal");
    }
}
