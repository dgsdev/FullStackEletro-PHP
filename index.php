<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Full Stack Eletro</title>
        <link rel="stylesheet" href="estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <script>
        function saudacao(){
            data = new Date();
            hora = data.getHours();

            if(hora < 12 ){
                document.getElementById("msg_abertura").innerHTML = "Bom dia!";
            }
            else if(hora < 18){
                document.getElementById("msg_abertura").innerHTML = "Boa Tarde!";
            }
            else {
                document.getElementById("msg_abertura").innerHTML = "Boa Noite!";
            }            
        }       
        </script>    
    </head>
    <body onload="saudacao()">

        
    <?php
       include_once("menu.html");
    ?>

<!-- Início do Menu 
        <nav class="menu">
            <a href="./index.php"><img class="logo" src="./assets/lgfull.png" alt="Full Stack Eletro"></a>
            <a href="./produtos.php">Produtos</a>
            <a href="./loja.php">Nossas lojas</a>
            <a href="./contato.php">Fale Conosco</a>            
        </nav>
Fim do Menu -->

        <div class="back">                
            <main class="main">
                <h2 class="fonte"><span id="msg_abertura"></span> Seja Bem-vindo(a)!</h2>                               
            </div>             
                <h1 class="efeito">Aqui em nossa loja, programadores tem desconto nos produtos para sua casa!</h1>
            </main>                
    <?php
       include_once("footer.html");
    ?>  
        <script src="script.js"></script>
    </body>
    </html>