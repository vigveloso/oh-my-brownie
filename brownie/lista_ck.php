<?php
if (session_status() == PHP_SESSION_NONE) {
    include('verifica_login.php');
}else{
    session_start();
    
}
require_once 'php_action/conexao.php';
?>

<?php include_once 'header.php'?>
<section class="hero is-success is-fullheight">
<div class="hero-body">
            <div class="container ">
            <div class="column is-5 is-offset-4">
                <table class="table">
                <thead>
                    <tr>
                    <th>Cobertura</th>
                    <th>Recheio</th>
                    <th>Adicionais</th>
                    <th>Valor</th>
                    <th>
                
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM cupcakes";
                $resultado = mysqli_query($conexao, $sql);
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                    <tr>
                    <td><?php echo $dados['cobertura'];?> </td>
                    <td><?php echo $dados['recheio'];?> </td>
                    <td><?php echo $dados['adicionais'];?> </td>
                    <td><?php echo $dados['preco'];?></td>
                    <td><a href="editar_ck.php?id=<?php echo $dados['id'];?>" class="button is-block is-link is-medium is-fullwidth">Editar</a></td>
                    <td>
                    <form action="php_action/delete_ck.php" method="POST">
                         <input type="hidden" value="<?php echo $dados['id'];?>" name="id">
                         <button type="submit" class="button is-block is-link is-medium is-fullwidth is-danger" name="btn_deletar_ck">Deletar</button>
                    </form>
                    </td>
                    </tr>
                <?php endwhile?>
                </tbody>
                </table>
                <a href="adicionar_ck.php" class="button is-link">Adicionar</a>
                </div>
                </div>
            </div>
    </section>

<?php include_once 'footer.php'?>
  