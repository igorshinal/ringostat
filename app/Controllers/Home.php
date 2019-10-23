<?php

namespace Controllers;

use Controllers\Currency;

class Home extends Controller
{
    public $rates;

    public function __construct() 
    {
        
        $this->rates = new Currency();

    }

    public function index()
    {
        return $this->view('View');
    }

    public function set()
    {
        if (empty($_POST['currency'])) {
            echo 0;

           
        }else {

            $result = $this->rates->curl() * $_POST['currency'];

            echo $result;
                
        }
        
            
        
         

       




    }
}

