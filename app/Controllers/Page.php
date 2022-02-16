<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends BaseController{

   public function about(){
       $data =[
           'name'=> 'Aamir Sohail',
            'title'=> 'About us',

       ]; 
       echo view('Template/header', $data);
       echo view('about');
       echo view('Template/footer');

   }
   public function contact(){
    $data =[
        'email'=> 'admin@gmail.com',
        'title'=> 'contact us',
    ]; 
    echo view('Template/header', $data);
    echo view('contact');
    echo view('Template/footer');

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