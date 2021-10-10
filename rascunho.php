<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Main extends BaseController
{
    protected $helpers = array('date','matematica_helper');
    public function index()
    {
        
        echo now();
        echo "</br>";

        echo somar(3,4);
        echo "</br>";
        echo divisao(40,2);
    }
}
