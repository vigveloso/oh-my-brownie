<?php
session_start();
require_once 'conexao.php';

if(isset($_POST['btn_deletar_pedido'])):
$id = mysqli_escape_string($conexao, $_POST['id'] );


$sql = "DELETE FROM pedido WHERE id = '$id'";
    if(mysqli_query($conexao, $sql)):
        header('Location: ../pedidos.php?sucesso');
    else:
        header('Location: ../pedidos.php?erro');
    endif;

endif;
?>