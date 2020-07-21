<?php
require_once 'conexao.php';

if(isset($_POST['btn_cadastrar_pedido'])):

$nome = mysqli_escape_string($conexao, $_POST['nome'] );
$email = mysqli_escape_string($conexao, $_POST['email'] );
$telefone = mysqli_escape_string($conexao, $_POST['telefone'] );
$pedido = mysqli_escape_string($conexao, $_POST['pedido'] );
echo $cobertura;

$sql = "INSERT INTO pedido (nome, email, telefone, pedido) VALUES ('$nome', '$email', '$telefone', '$pedido')";

    if(mysqli_query($conexao, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php?erro');
    endif;

endif;
?>