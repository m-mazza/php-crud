<?php

    require 'config/conexao.php';

    if(isset($_POST['action'])){
        if($_POST['action'] == 'insert'){
            insert();
        }else if($_POST['action'] == 'update'){
            update();
        }else{
            delete();
        }
    }

    function insert(){

        global $conexao;
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        $query = "INSERT INTO users VALUES('','$nome','$email','$telefone')";
        $conexao->query($query);
        
        echo "Cadastro feito com sucesso";
    };

    function update() {

        global $conexao;

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        $query = "UPDATE users SET nome='$nome', email='$email', telefone='$telefone' where id='$id'";
        $conexao->query($query);
        
        echo "Dados alterados com sucesso";
    };

    function delete(){

        global $conexao;

        $id = $_POST['action'];

        $query = "DELETE FROM users WHERE id='$id'";
        $conexao->query($query);
        
        echo "Usuário deletado com sucesso";
    };
?>