<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class PostModel extends Model {
    protected $table = "post";
    protected $DBGroup = "Default";
    protected $allowFields =['title','content','thumbnail','category_id'];
    protected $useTimestamps = true;
    protected $validationRules = [];
    protected $validationMessages = [];
    
}