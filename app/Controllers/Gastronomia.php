<?php

namespace App\Controllers;

class Gastronomia extends BaseController
{
    
    public function mostrar()
    {
        // Cargar el modelo de Gastronomia
        $gastronomiaModel = model('GastronomiaModel');

        // Obtener todas las filas de la tabla gastronomia
        $data['gastronomias'] = $gastronomiaModel->findAll();

        // Devolver la vista combinando diferentes partes de la página
        return
            view('common/head') .
            view('common/menu') .
            view('gastronomia/mostrar', $data) .
            view('common/footer');
    }
 
    public function agregar()
    {
        // Configurar datos para la vista
        $data['title'] = "Agregar nueva Comida";   
        $validation = \Config\Services::validation();

        // Verificar si el método de solicitud es GET
        if (strtolower($this->request->getMethod()) === 'get') {
            // Devolver la vista de agregar con los datos necesarios
            return view('common/head', $data)
                . view('gastronomia/agregar')
                . view('common/footer');
        }

        // Definir reglas de validación
        $rules = [
            'nombre_restaurante' => 'required',
            'tipo_comida' => 'required',
            'tipo_cocina' => 'required',
            'capacidad' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'descripcion' => 'required',
        ];

        // Validar los datos del formulario
        if (!$this->validate($rules)) {
            // Si no pasa la validación, devolver la vista de agregar con mensajes de validación
            return view('common/head', $data)
                . view('gastronomia/agregar', ['validation' => $validation])
                . view('common/footer');
        } else {
            // Si pasa la validación, insertar los datos y redirigir a la vista de mostrar
            if ($this->insert()) {
                return redirect('gastronomia/mostrar', 'refresh');
            }
        }
    }

    public function insert()
    {
        // Cargar el modelo de Gastronomia
        $gastronomiaModel = model('GastronomiaModel');

        // Datos a insertar en la base de datos
        $data = [
            "nombre_restaurante" => $_POST['nombre_restaurante'],
            "tipo_comida" => $_POST['tipo_comida'],
            "tipo_cocina" => $_POST['tipo_cocina'],
            "capacidad" => $_POST['capacidad'],
            "direccion" => $_POST['direccion'],
            "telefono" => $_POST['telefono'],
            "descripcion" => $_POST['descripcion']
        ];

        // Insertar datos en la base de datos
        $gastronomiaModel->insert($data, false);

        // Redirigir a la vista de mostrar
        return redirect('gastronomia/mostrar', 'refresh');
    }

    public function delete($id)
    {
        // Cargar el modelo de Gastronomia
        $gastronomiaModel = model('GastronomiaModel');

        // Eliminar un registro de la base de datos
        $gastronomiaModel->delete($id);

        // Redirigir a la vista de mostrar
        return redirect('gastronomia/mostrar', 'refresh');
    }

    public function editar($id)
    {
        // Cargar el modelo de Gastronomia
        $gastronomiaModel = model('GastronomiaModel');

        // Obtener datos específicos de un registro
        $data['gastronomia'] = $gastronomiaModel->find($id);

        // Devolver la vista combinando diferentes partes de la página
        return
            view('common/head') .
            view('common/menu') .
            view('gastronomia/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        // Cargar el modelo de Gastronomia
        $gastronomiaModel = model('GastronomiaModel');

        // Datos a actualizar en la base de datos
        $data = [
            "nombre_restaurante" => $_POST['nombre_restaurante'],
            "tipo_comida" => $_POST['tipo_comida'],
            "tipo_cocina" => $_POST['tipo_cocina'],
            "capacidad" => $_POST['capacidad'],
            "direccion" => $_POST['direccion'],
            "telefono" => $_POST['telefono'],
            "descripcion" => $_POST['descripcion']
        ];

        // Actualizar datos en la base de datos
        $gastronomiaModel->update($_POST['id'], $data);

        // Redirigir a la vista de mostrar
        return redirect('gastronomia/mostrar', 'refresh');
    }
}
