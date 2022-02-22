<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class UserModel extends Model {
    protected $primaryKey = "id";
    protected $table = "user";
    protected $DBGroup = "default";
    protected $allowedFields =['name','uid','email','summary','password'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'username'     => 'required|alpha_numeric_space|min_length[3]',
        'email'        => 'required|valid_email|is_unique[users.email]',
        'password'     => 'required|min_length[8]',
        'pass_confirm' => 'required_with[password]|matches[password]',
    ];
    protected $validationMessages = [];
    public function transBegin(){
        return $this->db->transBegin();
    }
     
}