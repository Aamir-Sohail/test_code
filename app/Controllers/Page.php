<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Page extends BaseController{
// protected $helpers = ['form'];
    public function about(){
       $data =[
           'name'=> 'Aamir Sohail',
            'title'=> 'About us',
       ];

       echo view('about', $data);
   }
   public function contact(){
       $email =\Config\Services::email();
          if($this->request->getMethod()== 'post'){
            if (! $this->validate([
                'email' => 'required|valid_email',
                'name' => 'required',
                'message' => 'required|min_length[50]'
            ])){
                $validator = $this->validator;
                if(!$validator->hasError('email')){
                    $email->setFrom($this->request->getPost('email'));
                    $email->setTo('admin@admin.com');
                    $email->setSubject($this->request->getPost('name'));
                    $email->setMessage($this->request->getPost('message'));
                    $email->send();
                }
      
            }
          }else{
    $data =[
        'email'=> 'admin@gmail.com',
        'title'=> 'contact us',
        'validator' => isset($validator) ? $validator : null,

        'c_f' =>[
   
            'form_open' =>form_open('/contact'),

            'email'=> form_input(['type'=>'email','class'=>'form-control','name'=>'email', 'value'=>$this->request->getPost('name')]),

            'name'=> form_input(['type'=>'text','class'=>'form-control','name'=>'name','value'=>$this->request->getPost('email')]),
             
            'message'=> form_textarea(['type'=>'text','class'=>'form-control','name'=>'message','value'=>$this->request->getPost('message')]),

            
        ],
    ]; 
}


   }

#call the login 
public function login(){
 return view('login');

}


public function register(){
    return view('register');
   
   }
    //this is used for the publicily used to show on the page..
//     public function index(){
//         // echo "WellCome to my page"; 
//         return  view('welcome_message'); 
//        }
// public function about($param = 'Guest'){
//     echo "welcome to about page " . $param; 
// }
// // call for private/Protected not use controller through this function..
// private function contact(){

//     echo " Contact us For more Details ";

// }
// protected function Mobie_Number(){

//     echo " Mobile Number ";

// }


}