<?php
if (session_status() == PHP_SESSION_NONE) {
    include('verifica_login.php');
}else{
    session_start();
}
?>

<?php include_once 'header.php'?>
<section class="hero is-success is-fullheight">

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de Brownies!</h3>
                    <div class="box">
                        <form action="php_action/create_ck.php" method="POST">
                        <div class="field">
                                    <label class="label">Cobertura</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Text input" name="cobertura" id="cobertura">
                                    </div>
                                    </div>

                                    <div class="field">
                                    <label class="label">Recheio</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Text input" name="recheio" id="recheio">
                                    </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Adicionais</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Text input" name="adicionais" id="adicionais">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Preço</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Text input" name="preco" id="preco">
                                        </div>
                                    </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth" name="btn_cadastrar_ck">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include_once 'footer.php'?>