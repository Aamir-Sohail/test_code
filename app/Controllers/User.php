<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Profiles;
use App\Models\UserModel;
use App\Models\ProfilesModel;

class User extends BaseController
{
    public function __construct()
    {
        //   
    }

    
    public function index()
    {
        echo "index";
    }
    public function new()
    {
        echo "new";
    }
    public function create()
    {
        $userModel =new UserModel();
        $profileModel = new ProfilesModel();  
         $userModel->transBegin();
         if(!$userModel->insert($this->request->getPost())){
             $this->session->setFlashData('errors',$userModel
             ->errors());
             return redirect()->to('register')->withInput(); 
         }  
         $data=[
             'user_id' =>$userModel->insertID(),
             'name' =>$this->request->getPost('name'),
                 
         ];
       if  (!$profileModel->insert($data)){
           $userModel->transRollBack();
           $this->session->setFlashData('errors',$profileModel
           ->errors());
           return redirect()->to('register'); 
       }
       $userModel->transCommit();
       $this->session->setFlashData('message',"User Registered Successfully!");
       return redirect()->to('login'); 
    
    }

    public function edit($id)
    {
        echo "Edit $id";
    }

    public function show($id)
    {
        echo "Show $id";
    }
    public function update($id)
    {
        echo "Update $id";
    }
}
