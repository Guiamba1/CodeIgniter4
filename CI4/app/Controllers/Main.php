<?php

namespace App\Controllers;

use App\Libraries\Vendapro;
use CodeIgniter\Controller;


class Main extends BaseController
{
    //protected $helpers = array('date','matematica_helper');
    public function index()
    {
        $d = new Vendapro();
        $d->preco = 19;

    $d->produto ="Computado";
    echo"</br>";
        echo $d->preco;
        echo"</br>"; echo"</br>";
        echo $d->produto;
    }
}
