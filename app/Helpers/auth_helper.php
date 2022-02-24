<?php

use Config\Services;
function LoggedIn(){

 $user =session()->get('user');
 if($user and $user['isLoggedIn']){

 
 return true;
 }
 return false;
}

function allowedEdit($usernmae)
{
  $user =session()->get('user');
  if($user['usernmae'] ===$usernmae){
      return true;
  }
  return false;
}

?>