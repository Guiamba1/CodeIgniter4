<?php
namespace App\Controllers\Loja; 
use CodeIgniter\Controller;
use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;

class Vendas extends BaseCollector{
    public function index(){
        echo"vendas oniline ";
    }

    public function Vendas($valor){
        echo $valor;
    }
}





















?>