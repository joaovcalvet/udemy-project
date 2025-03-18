<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContatoController extends Controller
{
    public function contato(): View|Factory
    {
        return view(view: "site.contato");
    }
}
