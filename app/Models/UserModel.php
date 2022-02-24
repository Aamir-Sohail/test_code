<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;
use Prophecy\Exception\Doubler\ReturnByReferenceException;

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
    protected $beforeInsert = ['hashPassword'];
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
    public function hashPassword($data)
    {
        $data['data']['password'] =password_hash($data['data']['password'],PASSWORD_DEFAULT);       
        return $data;
    }

    public function authenticate($user){
 $password = $user['password'];   
 $user =$this->getWhere(['email' =>$user['email']]);
    if($user->resultID->num_rows>0){
        $user = $user->getRow(); 
        // $verfiy = password_verify($password , $user->password);
     
        $verfiy = $password;  
        if($verfiy){
            return $user;
        }else{
            return false;
        }
    }
    return false;

    }
}