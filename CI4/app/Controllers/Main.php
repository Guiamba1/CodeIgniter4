<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Main extends BaseController
{
    public function index()
    {
        helper('date');
        echo now();
    }
}
