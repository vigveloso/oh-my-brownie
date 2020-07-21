<?php
session_start();
require_once 'conexao.php';

if(isset($_POST['btn_deletar_ck'])):
$id = mysqli_escape_string($conexao, $_POST['id'] );


$sql = "DELETE FROM cupcakes WHERE id = '$id'";
    if(mysqli_query($conexao, $sql)):
        header('Location: ../lista_ck.php?sucesso');
    else:
        header('Location: ../lista_ck.php?erro');
    endif;

endif;
?>