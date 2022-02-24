<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Profiles;
use App\Models\UserModel;
use App\Models\ProfilesModel;

class User extends BaseController
{
    private $userModel = null;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }


    public function index()
    {
        return redirect()->to('/login');
    }

    public function create()
    {
        $userModel = new UserModel();
        $profileModel = new ProfilesModel();
        $userModel->transBegin();
        if (!$userModel->insert($this->request->getPost())) {
            $this->session->setFlashData('errors', $userModel->errors());
            return redirect()->to('register')->withInput();
        }
        $data = [
            'user_id' => $userModel->insertID(),
            'name' => $this->request->getPost('name'),

        ];
        if (!$profileModel->insert($data)) {
            $userModel->transRollBack();
            $this->session->setFlashData('errors', $profileModel->errors());
            return redirect()->to('register');
        }
        $userModel->transCommit();
        $this->session->setFlashData('message', "User Registered Successfully!");
        return redirect()->to('login');
    }

    public function login()
    {

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $this->userModel->authenticate($this->request->getPost());
        if ($user) {
            $this->session->set('user', $user);
            $this->session->setFlashData('message', 'LoggedIn Successfully!');
            return redirect()->to('home');
        }
        $this->session->setFlashData('error', 'Unknown Email or Password');
        return redirect()->to('login')->withInput();
    }
    public function logout()
    {
        $this->session->remove('user');
        $this->session->setFlashData('message', 'LoggedOut Successfully!');
        return redirect()->to('login');
    }
    public function profiles(){
        $user =$this->userModel->join('profiles','profiles.user_id=user.id')->find('id');
       
        return view('profiles', ['user']);

    }
  
}
