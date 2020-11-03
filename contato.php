<?php

require_once('link.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['msg'])){
    $nome = $_POST['nome']; 
    $email = $_POST['email'];	
    $msg = $_POST['msg'];

    $sql = "INSERT INTO comentarios (nome, email, msg) VALUES ('$nome','$email','$msg')";
    $resultado = $link->query($sql);

    echo "<script>alert('Obrigado! Recebemos sua mensagem, vamos responder em breve. :)');</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="estilo.css">
        <style>
      
        div {
            display: inline-flex;        
            background-color: #fff;
            border-radius: 10px;       
            font-family: Rubik;
            color: #000;
            margin: 15px 6px 6px 6px;
            padding: 10px;          
        } 
        
        </style>
    </head>
    <body>
               
    <?php
       include_once("menu.html");
    ?>

        <header>
            <h2 class="header">Fale Conosco</h2>
          
        </header>
      
        <section class="contatos">
            <span class="email">
                <p class="contp"><img class="logocontato" src="./assets/lgmail.png">
                contato@fullstackeletro.com</p>
            </span>
            <span class="tel">
                <p class="contp"><img class="logocontato2" src="./assets/WhatsApp.png">
                (11) 9999-9999</p>                
            </span>
        </section>             
     
        <section class="formu">            
        <form method="post" action="">
            <h1 class="efeito2">Envie suas dúvidas, sugestões ou reclamações:</h1><br>      
            <p>Nome:</p>
            <br>
            <input class="nome" name="nome" type="text">
            <br>
            <br>
            <p>E-mail:</p>
            <br>
            <input class="nome" name="email" type="e-mail">
            <br>
            <br>
            <p>Mensagem:</p>
            <br>
            <textarea class="text" name="msg" placeholder="Digite sua mensagem aqui... Vamos responder o mais breve possível!"></textarea>
            <br>
            <br>
            <input type="submit" name="submit" value="ENVIAR">
        </form>

        </section> 

<?php 
              
$sql = "SELECT * FROM comentarios";
$resultado = $link->query($sql);

if ($resultado->num_rows > 0){
       while($rows = $resultado->fetch_assoc()) {
           echo "<div>";
           echo "Data: ", $rows['data'],"<br>";
           echo "Nome: ", $rows['nome'],"<br>";
           echo "Email: ", $rows['email'],"<br>";
           echo "Mensagem: ", $rows['msg'],"<br>";          
           echo "</div>";         
       }
} else {
    echo "Nenhum comentário ainda!";
}
?>     
            
      
    <?php
       include_once("footer.html");
    ?>          
        <script src="script.js"></script>        
    </body>
</html>