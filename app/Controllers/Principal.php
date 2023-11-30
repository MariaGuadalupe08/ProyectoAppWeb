<?php

namespace App\Controllers;

class Principal extends BaseController
{
    public function index()
    {
        // Cargar la vista 'principal'
        return view('principal');
    }
}