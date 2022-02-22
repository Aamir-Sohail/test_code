<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class ProfilesModel extends Model {
    protected $table = "profiles";
    protected $DBGroup = "Default";
    protected $allowFields =['user_id','name','address','city','state','country'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'name' =>'requried|alpha_numeric_space|min_length[3]',
        'user_id'        => 'required|is_unique[profiles.user_id]',

    ];
    protected $validationMessages = [];
    
}