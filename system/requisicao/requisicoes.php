<?php
require_once("../config/Conexao.php");
require_once("../config/config.php");

$funcao = $_GET['funcao'];

$conexao = new Conexao();

if ($funcao == "salvar") {

    if ($conexao->inserirRegistro("tbcontatos", $_POST) == "SQL INFOR PASS") {
        echo "SQL INFOR PASS";
    }
} else if($funcao == "editar"){
    $id = $_POST['idContato'];
    unset($_POST['idContato']);
    if($conexao->atualizarRegistro("tbcontatos","idContato", $id,$_POST, false) == "SQL INFOR PASS") {
        echo "SQL INFOR PASS";
    }
} else if($funcao == "excluir"){
    if($conexao->apagarRegistro("tbcontatos","idContato",$_GET['idContato'], false) == "SQL INFOR PASS"){
        header('Location: '.URL_BASE.'index.php');
    }
}
