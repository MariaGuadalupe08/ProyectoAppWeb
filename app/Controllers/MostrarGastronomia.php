<?php

namespace App\Controllers;

class MostrarGastronomia extends BaseController
{

    public function mostrarGastronomia()
    {
        $GastronomiaModel = model('GastronomiaModel');
        $data['gastronomias'] = $GastronomiaModel->findAll();
        return
            view('home/head') .
            view('home/menu') .
            view('mostrargastronomia', $data) .
            view('home/footer');

    }

    public function mostrarFestividad()
    {
        $festividadModel = model('FestividadModel');
        $data['festividades'] = $festividadModel->findAll();
        return
            view('home/head') .
            view('home/menu') .
            view('mostrarFestividad', $data) .
            view('home/footer');

    }
}