<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;

class SobreNosController extends Controller
{
    public function sobreNos(): string
    {
        return view(view: "site.sobre-nos");
    }
}
