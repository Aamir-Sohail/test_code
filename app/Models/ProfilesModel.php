<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class ProfilesModel extends Model {
    protected $table = "profiles";
    protected $DBGroup = "Default";
    protected $allowFields =['user_id','name','address','city','state','country'];
    protected $useTimestamps = true;
    protected $validationRules = [];
    protected $validationMessages = [];
    
}