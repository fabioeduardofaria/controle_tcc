<?php

namespace App\controllers;

use Core\model\Container;
use Core\controller\Action;

class ProdutoController extends Action
{    
    public function index()
    {
        $produto = Container::getModel("Produto");
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;
        
        $this->render("index");
    }

    
}



// IndexController


