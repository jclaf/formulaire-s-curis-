<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class UserModel extends Model{

    var $details;
    protected $DBGroup = 'default';
    protected $table = 'users';
    
    protected $allowedFields = [
        'LastName',
        'FirstName',
        'email',
        'password',
        'created_at'
    ];

    public function validate_user($email) {
        // Build a query to retrieve the user's details
        // based on the received username and password

        $builder = $this->db->table('users');
        $builder-> where('email', $email);
        $login = $builder->get()->getResult();

        // The results of the query are stored in $login.
        // If a value exists, then the user account exists and is validated
        if (is_array($login) && count($login) == 1) {
            // Set the users details into the $details property of this class
            $this->details = $login[0];
            // Call set_session to set the user's session vars via CodeIgniter
            $this->set_session();
            return true;
        }
        return false;
    }

    private function set_session() {
        session()->set(array(
                'id'=>$this->details->id,
                'name'=> $this->details->FirstName . ' ' . $this->details->LastName,
                'email'=>$this->details->email,
                'isLoggedIn'=>true
            )
        );
    }

}