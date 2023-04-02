<?php

namespace App\controllers;

use Core\controller\Action;

class ErrorController extends Action
{
    
    public function error404()
    {
        // $this->view->dados = array("errou", "haha", "ja era");
        $this->render("error404", "layout");
    }

    
}



// IndexController


