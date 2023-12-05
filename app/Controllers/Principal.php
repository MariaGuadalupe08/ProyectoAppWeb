<?php

namespace App\Controllers;

class Principal extends BaseController
{
    public function index()
    {
        // Cargar la vista 'principal'
        return view('principal');
    }

    public function inicio()
    {
        // Cargar la vista 'principal'
        return view('common/footer').
        view('common/head').
        view('common/menu');
    }

}