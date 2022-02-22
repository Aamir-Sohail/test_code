<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class CategoryModel extends Model {
    protected $table = "category";
    protected $DBGroup = "Default";
    protected $allowFields =['username','email','password'];
    protected $useTimestamps = true;
    protected $validationRules = [];
    protected $validationMessages = [];
    
}