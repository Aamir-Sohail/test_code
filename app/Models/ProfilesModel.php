<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class ProfilesModel extends Model {
    protected $table = "profiles";
    protected $DBGroup = "default";
    protected $allowedFields =['user_id','name']; 
    protected $useTimestamps = true;
    protected $validationRules = [
        'name' =>'required|alpha_numeric_space|min_length[3]',
        'user_id'        => 'required|is_unique[profiles.user_id]',

    ];
    protected $validationMessages = [];
    
}