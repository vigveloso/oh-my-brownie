<?php
require_once 'php_action/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/banner.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/order.css">

    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/3dc769bac9.js" crossorigin="anonymous"></script>

    <title>oh my brownie</title>
</head>
<body>
    <header id="header-1">
        <div class="logo-img">
            <img src="Images/logoomb.png" class="logo-omb">
        </div>
        <div class="header-words">
            <a href="#menu-1" class="header-words-1">menu</a>
            <a href="#order-1" class="header-words-1">encomende agora!</a>
            <a href="#about-1" class="header-words-1">sobre nós</a>                

        </div>
    </header>

    <section class="banner-1">
        <img src="Images/banneromb.png">
        <div class="eba-cheguei">
            <div class="eba-cheguei-2">
                <img src="Images/brownieomb.png">
            </div>
            <div class="button-cheguei-1">
                <a href="#order-1">
                    <button class="button-cheguei-2">compre agora!</button>
                </a>
            </div>
        </div>
    </section>

    <section id="menu-1">
        <div class="menu-title">
            <h1> menu </h1>
        </div>

        <div class="menu-text">
            <p>todos nossos brownies são feitos com nossa deliciosa massa molhadinha de chocolate. o resto é você quem escolhe!</p>
        </div>
        
        <div class="menu-price">
            <p>R$5</p>
            <img src="Images/menuomg.png">
        </div>
        
        <div class="menu-table">
                <table>
                        <tr class="table-line"> 
                          <th>1. COBERTURA</th>
                          <th>2. RECHEIO</th>
                          <th>3. ADICIONAIS</th>
                        </tr>
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
                        </tr>
                        <?php endwhile?>

            
                 </table>
        </div>
    </section>

    <section id="order-1">
        <h1>encomende agora!</h1>
            <form id="form-omb" autocomplete="off" action="php_action/create_pedido.php" method="POST">
                    <fieldset class="form-1">
                      <label>nome:</label><input class="name-form" type="text" name="nome"><br>
                      <label>email:</label><input class="email-form" type="email" name="email"><br>
                      <label>telefone:</label><input class="phone-form" type="tel" name="telefone"><br>
                      <label>pedido:</label><textarea class="order-form" cols="35" rows="8" name="pedido"></textarea><br>
                      <div class="btn-form-1">
                        <button class="btn-form" type="submit" value="enviar!" name="btn_cadastrar_pedido">Enviar</button>
                      </div>
                    </fieldset>

             </form>
    </section>

    <section id="about-1">
        <div class="about-text">
            <div class="about-title">
                <h1> sobre nós </h1>
            </div>
            <div class="about-text-2">
                <p>
                        a Oh My Brownie começou em 2019 após filha e mãe Giovanna e Virginia desenvolverem uma receita deliciosa de brownie que fez muito sucesso dentro de casa. após ideias de amigos e familiares, as duas pensaram: porque não compartilhar com o mundo como todo mundo diz? 
                    <br> <br>
                        e assim nasceu a Oh My Brownie!
                        
                </p>
            </div>
        </div>
        <div class="about-photo">
            <img src="Images/aboutomb.jpeg">
        </div>
    </section>

    <footer class="footer-1">
        <div class="footer-logo">
            <img src="Images/logoomb.png" class="footer-logo-img">
        </div>

        <div class="footer-icon">
                <a href="#header-1">
                    <i class="fas fa-arrow-up fa-5x"></i>
                </a>   
        </div>

        <div class="footer-contact">
            <p>Contato: </p>
                <div class="contact-footer-1">
                    <i class="fas fa-phone-alt"></i> 
                    <p>+55 11 94903-7842</p>
                </div>

                <div class="contact-footer-2">
                    <i class="far fa-envelope"></i>
                    <p>oh.my.brownie.br@gmail.com</p>
                </div>
        </div>
        <div class="footer-insta">
            <a href="https://www.instagram.com/oh.my.brownie/">
                <i class="fab fa-instagram fa-5x"></i>
            </a>
        </div>
    </footer>
</body>
</html>