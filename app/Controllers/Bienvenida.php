<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bienvenida extends BaseController {

    public function index()
    {
        // Carga la vista 'bienvenida' en la carpeta 'views'
        return view('bienvenida/bienvenidaVista');
    }
}

