<?php
session_start();
require_once 'conexao.php';

if(isset($_POST['btn_editar_ck'])):
$id = mysqli_escape_string($conexao, $_POST['id'] );
$cobertura = mysqli_escape_string($conexao, $_POST['cobertura'] );
$recheio = mysqli_escape_string($conexao, $_POST['recheio'] );
$adicionais = mysqli_escape_string($conexao, $_POST['adicionais'] );
$preco = mysqli_escape_string($conexao, $_POST['preco'] );


$sql = "UPDATE cupcakes SET cobertura = '$cobertura', recheio = '$recheio', adicionais = '$adicionais', preco = '$preco' WHERE id = '$id'";
    if(mysqli_query($conexao, $sql)):
        header('Location: ../lista_ck.php?sucesso');
    else:
        header('Location: ../lista_ck.php?erro');
    endif;

endif;
?>