<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        //return view('Pagina1');
        echo view('tamplates/header');
        echo view('tamplates/Pagina1');
        echo view("tamplates/footer");
    }
}
