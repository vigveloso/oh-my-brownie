<?php
if (session_status() == PHP_SESSION_NONE) {
    include('verifica_login.php');
}else{
    session_start();
}
?>

<?php include_once 'header.php'?>

<section class="hero is-success is-fullheight">
    <h2 class="has-text-black">Olá, <?php echo $_SESSION['nome'];?> Seja bem vindo!</h2>
            
</section>

<?php include_once 'footer.php'?>
  

</body>