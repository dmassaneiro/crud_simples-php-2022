<?php

use Src\Model\Liguagem;

include_once '../../vendor/autoload.php';

$obLinguagem = new Liguagem;


if (isset($_POST['gravar'])) {
    //tratamento dos campos
    $dados = array(
        'nome'     => $_POST['nome'],
        'url_logo' => $_POST['url'],
    );
    //se possuir a variavel id entra em editar
    if (isset($_POST['id'])) {
        $obLinguagem->Editar($dados,"id='".$_POST['id']."'");
    } else {
        //caso contrario grava novo dado
        $obLinguagem->Inserir($dados);
    }

    header('Location: ../../view/');
}

//remover dados
if(isset($_GET['id'])){
    $obLinguagem->Deletar("id='".$_GET['id']."'");
    header('Location: ../../view/');
}
