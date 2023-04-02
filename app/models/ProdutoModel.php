<?php

namespace App\models;

use Core\model\Model;
use PDO;

class ProdutoModel extends Model
{
    //representando os campos da tabela produto

    private $id;
    private $descricao;
    private $preco;
    private $ativo;
    private $deletado_em;
    private $modificado_em;
    private $criado_em;

    //métodos getters and setters
    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        return $this->$atributo = $valor;
    }

    //salvar
    public function salvar() {
        //SQL para inserção no banco de dados
        $sql = "insert into produto (descricao, preco) values (:descricao, :preco)";
        //Preparamento o SQL para ser executado no banco de dados
        $stmt = $this->db->prepare($sql);
        //substituindo os :nome pelo valor contido nos atributos do modelo
        $stmt->bindValue(':descricao', $this->__get('descricao'));
        $stmt->bindValue(':preco', $this->__get('preco'));
        //executando o SQL no bancod e dados
        $stmt->execute();
        //retornando os dados da inserção no banco de dados
        return $this; //o objeto com $this ou true;
    }

    //validar se cadastro pode ser realizado
    public function validaCadastro() {
        $valido = true;

        if(strlen($this->__get('descricao')) < 3) {
            $valido = false;
        }

        if($this->__get('preco') < 0) {
            $valido = false;
        }

        //são teste básicos que podemos realizar antes de mandar para o banco
       
        //retorna $valido
        return $valido;
    }

    //recuperar produto por nome
    public function getprodutoPorNome() {

        $sql  = "select descricao, preco from produto where descricao = :descricao";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':descricao', $this->__get('descricao'));
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //
    
    public function getProdutos() {
        //para fim de teste e vericar se contém algum erro até aqui
        //vou criar manualmente um array e retorna-lo

        $sql = "select id, descricao, preco from produto";

        return $this->db->query($sql)->fetchAll();

        // return array('Mesa', 'Cadeira');
    }

    //deletando produtos

    public function deletarProdutos($id) {

        $sql = "delete from produto where id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $this->__get('id'));
        $stmt->execute();

        return $this->db->query($sql)->fetchAll();
    }



    
}

