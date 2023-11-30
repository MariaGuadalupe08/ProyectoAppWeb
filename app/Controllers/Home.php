<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function mostrarFinal()
    {
        $hotelModel = model('HotelModel');
        $data['hoteles'] = $hotelModel->findAll();
        return
            view('home/head') .
            view('home/menu') .
            view('hotel/mostrarFinal', $data) .
            view('home/footer');

    }
}

