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
    public function before(RequestInterface $request, $arguments = null)
     {
        
        $session = Services::session();
        $user = $session->has('user') ? $session->get('user') :false;
        if('user')
        {
           
        }
        $session->setFlashData('message','you are already loggedIn');
        return redirect()->to('home');

     }
    
    
    public function after(RequestInterface $request ,ResponseInterface $response,$arguments = null)
    {
           
    }

}
    
