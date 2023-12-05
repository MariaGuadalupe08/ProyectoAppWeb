<?php

namespace App\Controllers;

class MostrarLugar extends BaseController
{

    public function mostrarLugar()
    {
        $lugarModel = model('LugarModel');
        $data['lugares'] = $lugarModel->findAll();
        return
            view('home/head') .
            view('home/menu') .
            view('mostrarLugar', $data) .
            view('home/footer');

    }
}