<?php

namespace App\Controllers;
use App\Models\UserModel;

use Config\Database;
use Prophecy\Call\Call;

class Home extends BaseController
{
    public function index()
     {

        //       $query =$this->db->query("SELECT * FROM user ");
        //       $result =$query->getResult();
        //     For single row Call
        //       $result =$query->getRow();
           
        //  var_dump($result);
        

                //   $query =$this->db->table('user')->get();
                //   $results =$query->getResult();
                //   echo $this->db->getLastQuery()."<br/>";
                //   echo $this->db->table('user')->countAll()."<br/>";
                //  $query = $this->db->table('user')->WHERE(['id'=>2])->WHERE(['username'=>'hamza'])->get();
                //   $results =$query->getRow();
                //   echo $this->db->getLastQuery()."<br/>";
                // $table =$this->db->table('user');
                //   $table->select('username, email');
                //   $query =$table->get();
                //   $results =$query->getRoWArray();
                //   var_dump($results); 
                // return view('welcome_message');

                // call the model in home Page......
                 
                    $userModel =new UserModel();
                    

                    // insertion of data
                    //  $data =[
                    //      'name' =>'aamirsohail',
                    //      'uid' => '12',
                    //      'email' => 'asohail384@yahoo.com',
                    //      'summary' => 'helllo',
                    //      'password' => password_hash('secret',PASSWORD_DEFAULT)
                    //  ];
                    //  $user =$userModel->insert($data);
//  find/fetch  the data..
                    //   $user =$userModel->findAll();
                    // update the record...
                    //   $user =$userModel->find(1);
                    //   $user['email'] ='sohail@gmail.com';
                    //   $user['name'] ='sohailaamir';
                    //   $userModel->save($user);
                    
        //   Delete the Record....
                       
                    //    $user =$userModel->delete(1);
                       
                    // var_dump($user);
                    // global function
                     // var_dump(FCPATH);
                    // exit;
                    // helper load
                //     helper('text');
                //    $word = word_censor('welcome to codeigniter 4 tutorial in urdu and hindi',['urdu','hindi']);
                //    echo $word; exit;
            


                    echo view('welcome_message');
    } 
}
