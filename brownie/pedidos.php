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
            <div class="column is-8 is-offset-3">
                <table class="table">
                <thead>
                    <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Pedido</th>
                    <th>
                
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM pedido";
                $resultado = mysqli_query($conexao, $sql);
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                    <tr>
                    <td><?php echo $dados['Nome'];?> </td>
                    <td><?php echo $dados['email'];?> </td>
                    <td><?php echo $dados['telefone'];?> </td>
                    <td><?php echo $dados['Pedido'];?> </td>
                    <td>
                    <form action="php_action/delete_pedido.php" method="POST">
                         <input type="hidden" value="<?php echo $dados['id'];?>" name="id">
                         <button type="submit" class="button is-block is-link is-medium is-fullwidth is-danger" name="btn_deletar_pedido">Deletar</button>
                    </form>
                    </td>
                    </tr>
                    <?php endwhile?>
                </tbody>
                </table>
              
                </div>
                </div>
            </div>
    </section>

<?php include_once 'footer.php'?>
  