<?php


namespace App\Controllers;

class Festividad extends BaseController
{

    public function mostrar()
    {

        $session = session();
        if($session->get('logged_in')!=true){
            return redirect('usuario/login','refresh');
        }

        // Cargar el modelo de Festividad
        $festividadModel = model('FestividadModel');

        // Obtener todas las festividades de la base de datos
        $data['festividades'] = $festividadModel->findAll();

        
        return
            view('common/head') .
            view('common/menu') .
            view('festividad/mostrar', $data) .
            view('common/footer');
    }
 
    // Método para agregar una nueva festividad
    public function agregar()
    {

      
        // Configurar datos para la vista
        $data['title'] = "Agregar nueva festividad";   
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            // Devolver la vista de agregar con los datos necesarios
            return view('common/head', $data)
                . view('festividad/agregar')
                . view('common/footer');
        }

        // Definir reglas de validación para el formulario de agregar
        $rules = [
            'nombre_festividad' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'atracciones' => 'required',
            'fecha' => 'required'
        ];

        // Validar los datos del formulario
        if (!$this->validate($rules)) {
           
            return view('common/head', $data)
                . view('festividad/agregar', ['validation' => $validation])
                . view('common/footer');
        } else {
            
            if ($this->insert()) {
                return redirect('festividad/mostrar', 'refresh');
            }
        }
    }

    // Método para insertar datos de una nueva festividad en la base de datos
    public function insert()
    {

     

        $festividadModel = model('FestividadModel');

        // Datos a insertar en la base de datos
        $data = [
            "nombre_festividad" => $_POST['nombre_festividad'],
            "descripcion" => $_POST['descripcion'],
            "precio" => $_POST['precio'],
            "atracciones" => $_POST['atracciones'],
            "fecha" => $_POST['fecha']
        ];

        $festividadModel->insert($data, false);

        return redirect('festividad/mostrar', 'refresh');
    }

    // Método para eliminar una festividad
    public function delete($id)
    {

      
        
        $festividadModel = model('FestividadModel');

        // Eliminar un registro de la base de datos
        $festividadModel->delete($id);
        return redirect('festividad/mostrar', 'refresh');
    }

    // Método para editar una festividad
    public function editar($id)
    {


        // Cargar el modelo de Festividad
        $festividadModel = model('FestividadModel');

        // Obtener datos específicos de un registro
        $data['festividad'] = $festividadModel->find($id);

        // Devolver la vista combinando diferentes partes de la página
        return
            view('common/head') .
            view('common/menu') .
            view('festividad/editar', $data) .
            view('common/footer');
    }

    public function update()
    {

     

        $festividadModel = model('FestividadModel');
        $data = [
            "nombre_festividad" => $_POST['nombre_festividad'],
            "descripcion" => $_POST['descripcion'],
            "precio" => $_POST['precio'],
            "atracciones" => $_POST['atracciones'],
            "fecha" => $_POST['fecha']
        ];
        $festividadModel->update($_POST['id'], $data);
        return redirect('festividad/mostrar', 'refresh');
    }

}
