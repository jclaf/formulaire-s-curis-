<?php

namespace App\Controllers;
use App\Models\UserModel;

class Signup extends BaseController
{

    public function index()
    {
        $data = [];
        $this->show_register($data);
    }

    public function register()
    {
        $data =[];
        
        if($this->request->getMethod() == "post")
        {
            $rules = [
                'LastName'          => 'required|min_length[2]|max_length[50]',
                'FirstName'          => 'required|min_length[2]|max_length[50]',
                'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
                'password'      => 'required|min_length[4]|max_length[50]',
                'confirmpassword'  => 'matches[password]'
            ];   
            
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                $this->show_register($data);
            }else{
                $model = new UserModel();
                $data = [
                    'LastName'     => $this->request->getVar('LastName'),
                    'FirstName'     => $this->request->getVar('FirstName'),
                    'email'    => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_ARGON2I)
                ];
                $model->save($data);
                return redirect()->to('signin');
            }
        } else {
            return redirect()->to('profile');
        }   
    }

    public function show_register(array $data)
    {
        echo view('templates/header');
        echo View('FormSign/register.php',$data);
        echo view('templates/header');
    }
}