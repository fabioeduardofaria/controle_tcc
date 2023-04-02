<?php

namespace App\controllers;

//Recursos de nosso MVC
use Core\controller\Action;
use Core\model\Container;
//Models utilizados
use App\models\ProdutoModel;
use App\models\InfoModel;

class IndexController extends Action
{
    // public function index()
    // {
    //     //utilizar o método getModel de container para 
    //     //instancial o model
    //     $produto = Container::getModel("Produto");
    //     $produtos = $produto->getProdutos();
    //     $this->view->dados = $produtos;
    //     $this->render("index", "layout");
    // }

    public function index()
    {
        $this->view->login = isset($_GET['login']) ? $_GET['login'] : '';
        $this->render("index");
    }




    // public function sobre_nos()
    // {
    //     $info = Container::getModel("Info");
    //     $informacoes = $info->getInfo();

    //     //ignora alertas caso exista, como esta variável 
    //     //inicia vazia. Pode gerar alertas desnecessários.
    //     $this->view->dados = $informacoes;
    //     $this->render("sobre_nos", "layout");
    // }

    // public function produto()
    // {
    //     // $this->view->errorCadastro = false;
    //     $this->view->status = array(
    //         "status" => "",
    //         "msg"    => ""
    //     );

    //     $this->view->tempProduto = array(
    //         "descricao" => "",
    //         "preco"    => ""
    //     );

    //     $this->render("produto", "layout");
    // }

    // public function salvar_produto()
    // {
    //     //receber dados do formulario via post //faz a instancia de produto com a conexão com banco de dados
    //     $produto = Container::getModel('Produto');
    //     //seta os dados do form no atributo da classe Produto
    //     $produto->__set('descricao', isset($_POST['descricao']) ? $_POST['descricao'] : "");
    //     $produto->__set('preco', isset($_POST['preco']) ? $_POST['preco'] : "");

    //     //validando os dados conforme regra que criamos
    //     if ($produto->validaCadastro()) {
    //         //sucesso
    //         if (count($produto->getprodutoPorNome()) == 0) {
    //             //caso retornar 0 linhas afetadas na query //Envia os dados para o banco de dados
    //             $produto->salvar();
    //             //podemos criar um atributo generico no objeto pois estamos herdando de action o view
    //             $this->view->status = array(
    //                 "status" => "SUCCESS",
    //                 "msg"    => "Cadastro realizado com sucesso"
    //             );

    //             $this->view->tempProduto = array(
    //                 "descricao" => "",
    //                 "preco"    => ""
    //             );

    //             $this->render('produto', 'layout');
    //         } else {
    //             //caso retornar 1 linha na query - indica que ja esta cadastrado no banco de dados
    //             $this->view->status = array(
    //                 "status" => "ERROR",
    //                 "msg"    => "Erro ao cadastrar produto, pois já existe este produto no banco de dados"
    //             );

    //             $this->view->tempProduto = array(
    //                 "descricao" => $_POST['descricao'],
    //                 "preco"    => $_POST['preco']
    //             );

    //             $this->render('produto', 'layout');
    //         }
    //     } else {
    //         //erro na digitação < que 3 caracteres // $this->view->errorCadastro = true;

    //         //armazena os dados para recarregar o form

    //         $this->view->tempProduto = array(
    //             "descricao" => isset($_POST['descricao']) ? $_POST['descricao'] : "",
    //             "preco"    => isset($_POST['preco']) ? $_POST['preco'] : ""
    //         );

    //         $this->view->status = array(
    //             "status" => "ERROR",
    //             "msg"    => "Erro ao cadastrar produto, verifique os campos digitados e tente novamente"
    //         );
    //         $this->render('produto', 'layout');
    //     }
    // }

    // public function contato()
    // {
    //     //$this->view->dados = array("Arduino", "Node MCU", "Raspberry");
    //     $this->render("contato", "layout");
    // }
}


// IndexController
