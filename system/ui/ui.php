<?php
require_once("../Agenda_PHP_1/system/config/Conexao.php");
require_once("../Agenda_PHP_1/system/funcoes/componestes.php");

function listViewContatos()
{
    $conexao = new Conexao();
    $conexao->conectar();

    $data = $conexao->obterRegistros("tbcontatos", null, null, null,0, false);
    criarTabelaContatos($data);
}
function lerDadosContato($id, $posicao){
    $conexao = new Conexao();
    $conexao->conectar();

    $data = $conexao->obterRegistros("tbcontatos","idContato",$id, null, 2, false);
    
    return $data[0][$posicao];
}
function obterLetra($id){
    $conexao = new Conexao();
    $conexao->conectar();

    $data = $conexao->obterRegistros("tbcontatos","idContato",$id, null, 2, false);
    
    return $data[0]['nomeContato'][0];
}
