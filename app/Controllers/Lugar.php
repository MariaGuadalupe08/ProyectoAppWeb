<?php

namespace App\Controllers;

class Lugar extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar()
    {

         // Cargar el modelo de lugar turístico
        $lugarModel = model('LugarModel');

        // Obtener todas las filas de la tabla gastronomia
        $data['lugares'] = $lugarModel->findAll();
        return

        // Devolver la vista combinando diferentes partes de la página
            view('common/head') .
            view('common/menu') .
            view('lugar/mostrar', $data) .
            view('common/footer');
    }
 
    public function agregar(){

         // Configurar datos para la vista
        $data['title']="Agregar Lugar Turístico";   
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head',$data)
                .  view('lugar/agregar')
                .  view('common/footer');
            }
    
            // Definir reglas de validación
            $rules = [
                'nombre_lugar' => 'required',
                'descripcion' => 'required',
                'ubicacion' => 'required',
                'horario' => 'required',
                'costo_entrada' => 'required',
            ];
    
            if (! $this->validate($rules)) {
                return view('common/head',$data)
                .  view('lugar/agregar',['validation' => $validation])
                .  view('common/footer');
            }
            else{
                if($this->insert()){
                    return redirect('lugar/mostrar','refresh');
                }
            }

    }

    public function insert()
    {
        $lugarModel = model('LugarModel');
        $data = [
            "nombre_lugar" => $_POST['nombre_lugar'],
            "descripcion" => $_POST['descripcion'],
            "ubicacion" => $_POST['ubicacion'],
            "horario" => $_POST['horario'],
            "costo_entrada" => $_POST['costo_entrada']
        ];
        $lugarModel->insert($data,false);
        return redirect('lugar/mostrar', 'refresh');
    }

    public function delete($id)
    {
        $lugarModel = model('LugarModel');
        $lugarModel->delete($id);
        return redirect('lugar/mostrar', 'refresh');
    }

    public function editar($id)
    {

        $adoptadorModel = model('LugarModel');
        // Obtener datos específicos de un registro
        $data['lugar'] = $adoptadorModel->find($id);
        return
            view('common/head') .
            view('common/menu') .
            view('lugar/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $lugarModel = model('LugarModel');
        $data = [
            "nombre_lugar" => $_POST['nombre_lugar'],
            "descripcion" => $_POST['descripcion'],
            "ubicacion" => $_POST['ubicacion'],
            "horario" => $_POST['horario'],
            "costo_entrada" => $_POST['costo_entrada']
        ];
        $lugarModel->update($_POST['id'], $data);
        return redirect('lugar/mostrar', 'refresh');
    }

}
