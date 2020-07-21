<?php
if (session_status() == PHP_SESSION_NONE) {
    include('verifica_login.php');
}else{
    session_start();
}
require_once 'php_action/conexao.php';

    if(isset($_GET['id'])):
        $id = mysqli_escape_string($conexao, $_GET['id']);
        $sql = "SELECT * FROM cupcakes WHERE id = '$id'";
        $resultado = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>

<?php include_once 'header.php'?>
<section class="hero is-success is-fullheight">

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Editar de Brownies!</h3>
                    <div class="box">
                        <form action="php_action/update_ck.php" method="POST">
                        <div class="field">
                                    <label class="label">Cobertura</label>
                                    <div class="control">
                                        <input type="hidden" value="<?php echo $dados['id'];?>" name="id">
                                        <input class="input" value="<?php echo $dados['cobertura'];?>" type="text" placeholder="Text input" name="cobertura" id="cobertura">
                                    </div>
                                    </div>

                                    <div class="field">
                                    <label class="label">Recheio</label>
                                    <div class="control">
                                        <input class="input" value="<?php echo $dados['recheio'];?>" type="text" placeholder="Text input" name="recheio" id="recheio">
                                    </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Adicionais</label>
                                        <div class="control">
                                            <input class="input" value="<?php echo $dados['adicionais'];?>" type="text" placeholder="Text input" name="adicionais" id="adicionais">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Preço</label>
                                        <div class="control">
                                            <input class="input" value="<?php echo $dados['preco'];?>" type="text" placeholder="Text input" name="preco" id="preco">
                                        </div>
                                    </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth" name="btn_editar_ck">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include_once 'footer.php'?>