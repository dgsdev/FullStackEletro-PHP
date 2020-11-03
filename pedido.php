<?php

require_once('link.php');

if(isset($_POST['cliente']) && isset($_POST['end']) && isset($_POST['tel']) 
&& isset($_POST['prod']) && isset($_POST['preco']) && isset($_POST['qtd']) && isset($_POST['total'])){
    $cliente = $_POST['cliente'];
    $end = $_POST['end'];
    $tel = $_POST['tel']; 
    $prod = $_POST['prod'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd']; 
    $total = $_POST['total'];

    $sql = "INSERT INTO pedido (cliente, endereco, telefone, produto, preco, quantidade, preco_total) 
    VALUES ('$cliente', '$end', '$tel', '$prod', '$preco', '$qtd', '$total')";
    $resultado = $link->query($sql);

    echo "<script>alert('Produto Incluído com Sucesso!');</script>";

}  
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="estil2o.css">
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
               
     
        <section class="formu">

        <form method="post" action="">
            <h1 class="efeito2">Faça seu Pedido e Aproveite Promoções:</h1><br> 

            <label for="cliente">Cliente:</label>               
            <br><br>
            <input class="nome" name="cliente" type="text" required>
            <br><br>

            <label for="end">Endereço:</label> 
            <br><br>
            <input class="nome" name="end" type="text" required>
            <br><br>

            <label for="tel">Telefone:</label>
            <br><br>
            <input class="nome" type="tel" name="tel" placeholder="     Formato: 00-00000-0000" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required>
            <br><br>

    
            <label for="produtos">Produto</label>
            <br><br>
            <select class="nome" id="produtos" name="prod">
            <option>Geladeira Frost Free Brastemp Side Inverse 540L</option>
            <option>Geladeira Frost Free Brastemp Branca 375 Litros</option>
            <option>Geladeira Frost Free Consul Prata 340 Litros</option>
            <option>Fogão 4 Bocas Consul Inox com Mesa de Vidro</option>
            <option>Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático</option>
            <option>Micro-ondas Consul 32 Litros inox</option>
            <option>Microondas 25L Espelhado Philco</option>
            <option>Forno de Microondas Eletrolux 20L</option>
            <option>Lavadoura de Roupas Brastemp 11KG com Turbo Performance Branca</option>
            <option>Lavadoura de Roupas</option>
            <option>Lava-louça Eletrolux Inox com 10 serviços, 06 Programas de Lavagem e Painel Blue Touch</option>
            <option>Lava Louça Compacta, 8 Serviços Branca 127V</option>
            </select>
            <br><br>

            <label for="preco">Preço:</label>
            <br><br>
            <input class="nome" type="number" id="preco" name="preco" required>
            <br><br>
            
            <label for="qtd">Quantidade:</label>
            <br><br>
            <input class="nome" type="number" id="qtd" name="qtd" required>
            <br><br>
            
            <label for="total">Valor Total:</label>
            <br><br>
            <input class="nome" type="number" id="total" name="total" required>
            <br><br>
         
            <input type="submit" name="submit" value="ENVIAR">

        </form>

        </section> 

<?php 
              
$sql = "SELECT * FROM pedido";
$resultado = $link->query($sql);

if ($resultado->num_rows > 0){
       while($rows = $resultado->fetch_assoc()) {
           echo "<div>";
           echo "Cliente: ", $rows['cliente'],"<br>";
           echo "Endereço: ", $rows['endereco'],"<br>";
           echo "Telefone: ", $rows['telefone'],"<br>";
           echo "Produto: ", $rows['produto'],"<br>"; 
           echo "Preço : ", $rows['preco'],"<br>"; 
           echo "Quantidade: ", $rows['quantidade'],"<br>"; 
           echo "Valor Total: ", $rows['preco_total'],"<br>";          
           echo "</div>";            
       }
} else {
    echo "Nenhum pedido no Banco de Dados!";
}
?>                   
    <?php
       include_once("footer.html");
    ?>      
        <script src="script.js"></script>
    </body>
</html>