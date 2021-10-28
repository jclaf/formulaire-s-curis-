<?php

namespace App\Controllers;
use App\Models\UserModel;

class Signin extends BaseController
{
    public function index()
    {
        $data = [];
        $this->show_login($data);
    }


    public function loginUser()
    {
        $data = [];
        if($this->request->getMethod() == "post")
        {
            $rules = [
                'email' => 'required|min_length[2]|max_length[50]',
                'password' => 'required|min_length[3]|max_length[255]|validateUser[email,password]'
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'login ou Mot de passe incorrect'
                ]
            ];
            if(!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
                $this->show_login($data);
            }else{
                $model = new UserModel();

                $model->validate_user($this->request->getPost('email'));
                return redirect()->to('profile');
            }
        } else {
            return redirect()->to('profile');
        }
    }

    public function logout_user() 
    {
        session()->destroy();
        return redirect()->to('signin');
    }

    public function show_login(array $data)
    {
        echo view('templates/header');
        echo View('FormSign/login.php',$data);
        echo view('templates/footer');
    } 

}
