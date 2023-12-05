<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $data['title']="Login"; 
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head') .
                view('usuario/login') .
                view('common/footer');
            }
    
            $rules = [
                'username' => 'required',
                'password'=>'required'
            ];
    
            if (! $this->validate($rules)) {
                return view('common/head') .
                view('usuario/login') .
                view('common/footer');
            }
            else{
                //si pasa las reglas
                $username = $_POST['username'];
                $password = $_POST['password'];
                $userModel = model('UserModel');
                $data['usuario']= $userModel->like('username',$username)
                                ->Like('password',$password)
                                ->findAll();
                //print_r($data['usuario']);
                if(count($data['usuario'])>0){
                    //print "creo la sesión";
                    //print $data['usuario'][0]->users_id;
                    $session = session();

                    $newdata = [
                        'users_id' => $data['usuario'][0]->users_id,
                        'username'  => $data['usuario'][0]->username,
                        'username'     => $data['usuario'][0]->username,
                        'logged_in' => true,
                    ];
                    
                    $session->set($newdata);

                    // Redirige a la página deseada
                    return redirect()->to('/menu');

                }
                else{
                    return redirect('usuario/login','refresh');
                }
            }

       
        
    }


    
}