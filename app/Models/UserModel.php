<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class UserModel extends Model {
    protected $primaryKey = "id";
    protected $table = "user";
    protected $DBGroup = "default";
    protected $allowedFields =['username','email','password'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'username'     => 'required|alpha_numeric|min_length[3]',
        'email'        => 'required|valid_email|is_unique[user.email]',
        'password'     => 'required|min_length[8]',
        'pass_confirm' => 'required_with[password]|matches[password]',
    ];
    protected $validationMessages = [];
    public function transBegin(){
        return $this->db->transBegin();
    }
    public function transRollback()
    {
        return $this->db->transRollback();
    }
     
    public function transCommit()
    {
        return $this->db->transCommit();
    }
}