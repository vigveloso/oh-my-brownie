<?php
require_once 'conexao.php';

if(isset($_POST['btn_cadastrar_ck'])):

$cobertura = mysqli_escape_string($conexao, $_POST['cobertura'] );
$recheio = mysqli_escape_string($conexao, $_POST['recheio'] );
$adicionais = mysqli_escape_string($conexao, $_POST['adicionais'] );
$preco = mysqli_escape_string($conexao, $_POST['preco'] );
echo $cobertura;

$sql = "INSERT INTO cupcakes (cobertura, recheio, adicionais, preco) VALUES ('$cobertura', '$recheio', '$adicionais', '$preco')";

    if(mysqli_query($conexao, $sql)):
        header('Location: ../lista_ck.php?sucesso');
    else:
        header('Location: ../lista_ck.php?erro');
    endif;

endif;
?>