<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use DeepCopy\Filter\Filter;

class LoggedIn implements FilterInterface
{
    // public function before(RequestInterface  $request)
     public function before(RequestInterface $request, $augrements =null)
     {
        
        $session = Services::session();
        if($session->has('user'))
        {
            $user = $session->get('user');
            if($user['isLoggedIn']){
            return true;
            }else{
                $session->getFlashData('message', 'You are Logged In');
                return redirect()->to('login');
            }
        }
        $session->setFlashData('message','you are loggedIn');
        return redirect()->to('login');

     }
    
    
    public function after(RequestInterface $request ,ResponseInterface $response, $augrements =null)
    {
           
    }

}
    
