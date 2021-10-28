<?php

namespace App\Controllers;
use App\Models\UserModel;

class Profile extends BaseController
{

        public function index()
        {
            $data['email'] = session('email');
            $this->show_profile($data);
        }

        public function show_profile(array $data)
        {
            echo View('templates/header.php');
            echo View('profile.php',$data);
            echo View('templates/footer.php');
        } 

}