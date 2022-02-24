<?php

use Config\Services;
function LoggedIn(){
$session = Services::session();
 $user =$session->get('user')?? null;
 if($user AND $user['isLoggedIn']){

 
 return true;
 }
 return false;
}



?>