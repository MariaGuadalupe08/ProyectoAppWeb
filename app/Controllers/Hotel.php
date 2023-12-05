<?php

namespace App\Controllers;

class Hotel extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar()
    {

        $session = session();
        if($session->get('logged_in')!=true){
            return redirect('usuario/login','refresh');
        }

         // Cargar el modelo de hotel
        $hotelModel = model('HotelModel');
        $data['hoteles'] = $hotelModel->findAll();
        return

        // Devolver la vista 
            view('common/head') .
            view('common/menu') .
            view('hotel/mostrar', $data) .
            view('common/footer');
    }
 
    public function agregar(){
        $data['title']="Agregar nuevo hotel";   


         // Verificar si el método de solicitud es GET
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head',$data)
                .  view('hotel/agregar')
                .  view('common/footer');
            }
        // Definir reglas de validación
            $rules = [
                'nombre_hotel' => 'required',
                'direccion' => 'required',
                'telefono' => 'required',
                'precio_hospedaje' => 'required',
                'descripcion' => 'required',
                'estrellas' => 'required'
            ];
    
             // Validar los datos del formulario
            if (! $this->validate($rules)) {
                return view('common/head',$data)
                .  view('hotel/agregar',['validation' => $validation])
                .  view('common/footer');
            }
            else{
                if($this->insert()){
                    return redirect('hotel/mostrar','refresh');
                }
            }

    }

    public function insert()
    {


        $hotelModel = model('HotelModel');
        $data = [

            // Datos a insertar en la base de datos
            "nombre_hotel" => $_POST['nombre_hotel'],
            "direccion" => $_POST['direccion'],
            "telefono" => $_POST['telefono'],
            "precio_hospedaje" => $_POST['precio_hospedaje'],
            "descripcion" => $_POST['descripcion'],
            "estrellas" => $_POST['estrellas']
        ];
        $hotelModel->insert($data,false);
        return redirect('hotel/mostrar', 'refresh');
    }

    // Eliminar un registro de la base de datos
    public function delete($id)
    {

        $hotelModel = model('HotelModel');
        $hotelModel->delete($id);
        return redirect('hotel/mostrar', 'refresh');
    }

    public function editar($id)
    {

        $hotelModel = model('HotelModel');
        $data['hotel'] = $hotelModel->find($id);
        return
            view('common/head') .
            view('common/menu') .
            view('hotel/editar', $data) .
            view('common/footer');
    }

    public function update()
    {


        $hotelModel = model('HotelModel');
        $data = [
            "nombre_hotel" => $_POST['nombre_hotel'],
            "direccion" => $_POST['direccion'],
            "telefono" => $_POST['telefono'],
            "precio_hospedaje" => $_POST['precio_hospedaje'],
            "descripcion" => $_POST['descripcion'],
            "estrellas" => $_POST['estrellas']
        ];
        $hotelModel->update($_POST['id'], $data);
        return redirect('hotel/mostrar', 'refresh');
    }


}
