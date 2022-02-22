<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class UserModel extends Model {
    protected $primaryKey = "id";
    protected $table = "user";
    protected $DBGroup = "default";
    protected $allowedFields =['name','uid','email','summary','password'];
    protected $useTimestamps = true;
    protected $validationRules = [];
    protected $validationMessages = [];
    
}