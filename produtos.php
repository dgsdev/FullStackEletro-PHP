<?php

require_once('link.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="estilo.css">
        <script src="functions.js"></script>
    </head>
    <body>
            
    <?php
       include_once("menu.html");
    ?>

        <header class="header">
        <h2>Produtos</h2>
        </header>
 
        <section class="categorias">            
                    <h3 class="categoria">Categorias</h3>                  
                    <ul class="categoria">
                        <li onclick="exibir_todos()" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Todos Produtos (12)</li>
                        <li onclick="exibir_categoria('geladeiras')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Geladeiras (3)</li>
                        <li onclick="exibir_categoria('fogão')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Fogões (2)</li>
                        <li onclick="exibir_categoria('microondas')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Microondas (3)</li>
                        <li onclick="exibir_categoria('lavadouras_roupa')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Lavadouras de roupa  (2)</li>
                        <li onclick="exibir_categoria('lava_louças')" onmouseover="upScaleMenu(this)" onmouseout="downScaleMenu(this)">Lava-louças (2)</li>
                        <li><a href="pedido.php" style="text-decoration: none; color: #000; font-weight: bold;" onmouseover="upScaleMenu(this)" onmouseout="downScaleM(this)">Faça seu Pedido</a></li>                        
                    </ul>
                </td>
        </section>

<section class="produtos">     
<?php 
              
$sql = "SELECT * FROM produtos;";
$result = $link->query($sql);

if ($result->num_rows > 0){
       while($rows = $result->fetch_assoc()) {
          
?>

    <div class="box_produto" id="<?php echo $rows["categorias"]; ?>">                
    <img src="<?php echo $rows["imagem"]; ?>" alt="<?php echo $rows["descricao"]; ?>" class="itens" onclick="zoom(this)">
    <br>
    <p class="descricao"><?php echo $rows["descricao"]; ?></p>
    <hr>
    <p class="descricao"><strike>R$ <?php echo $rows["preco"]; ?></strike></p>
    <p class="preco">R$ <?php echo $rows["preco_venda"]; ?></p>                 
</div>
       

<?php
       }
    } else {
        echo "Nenhum Produto Cadastrado!";
    }
?>

</section>
<!--
                <div class="box_produto" id="geladeira">  
                    <img src="./assets/geladeira.jpg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Geladeira Frost Free Brastemp Branca 375 Litros</p>
                    <hr>
                    <p class="descricao"><strike>R$ 2.068,60</strike></p>
                    <p class="preco">R$ 1.910,90</p>
                   
                </div>
                <div class="box_produto" id="geladeira">  
                    <img src="./assets/geladeiraprata2.jpg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Geladeira Frost Free Consul Prata 340 Litros</p>
                    <hr>
                    <p class="descricao"><strike>R$ 2.199,00</strike></p>
                    <p class="preco">R$ 2.069,00</p>
                   
                </div>
                <div class="box_produto" id="fogao">                 
                    <img src="./assets/FogãoPequeno.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Fogão 4 Bocas Consul Inox com Mesa de Vidro</p>
                    <hr>
                    <p class="descricao"><strike>R$ 1.299,00</strike></p>
                    <p class="preco">R$ 1.129,00</p>
                   
                </div>
          
                <div class="box_produto" id="fogao">  
                    <img src="./assets/fogão.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático</p>
                    <hr>
                    <p class="descricao"><strike>R$ 600,00</strike></p>
                    <p class="preco">R$ 519,70</p>
                   
                </div>
                <div class="box_produto" id="microondas"> 
                    <img src="./assets/micro.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao" id="microondas">Micro-ondas Consul 32 Litros inox <br>220v</p>
                    <hr>
                    <p class="descricao"><strike>R$ 580,00</strike></p>
                    <p class="preco">R$ 409,88
                   
                </div>
                <div class="box_produto" id="microondas"> 
                    <img src="./assets/micro2.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Microondas 25L Espelhado Philco <br>220V</p>
                    <hr>
                    <p class="descricao"><strike>R$508,70</strike></p>
                    <p class="preco">R$ 464,53</p>
                   
                </div>
                <div class="box_produto" id="microondas"> 
                    <img src="./assets/microondas.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Forno de Microondas Eletrolux 20L <br>Branco</p>
                    <hr>
                    <p class="descricao"><strike>R$ 1.299,00</strike></p>
                    <p class="preco">R$ 1.129,00</p>               
                </div>
            
                <div class="box_produto" id="lava_loucas"> 
                    <img src="./assets/lavalouça1.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Lava-louça Eletrolux Inox com 10 serviços, 06 Programas de Lavagem e Painel Blue Touch</p>
                    <hr>
                    <p class="descricao"><strike>R$ 3.599,00</strike></p>
                    <p class="preco">$ 2.799,90</p>
                   
                </div>
                <div class="box_produto" id="lava_loucas"> 
                    <img src="./assets/lavalouça2.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Lava Louça Compacta, 8 Serviços Branca 127V <br>Brastemp</p>
                    <hr>
                    <p class="descricao"><strike>R$ 1.970,50</strike></p>
                    <p class="preco">R$ 1.730,61</p>
                   
                </div>
                <div class="box_produto" id="lava_roupas"> 
                    <img src="./assets/lavadora.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Lavadoura de Roupas Brastemp 11KG com Turbo Performance Branca</p>
                    <hr>
                    <p class="descricao"><strike>R$ 1.699,00</strike></p>
                    <p class="preco">R$ 1.214,10</p>
                   
                </div>
                <div class="box_produto" id="lava_roupas"> 
                    <img src="./assets/secadora.jpeg" class="itens" onclick="zoom(this)">
                    <br>
                    <p class="descricao">Lavadoura de Roupas <br>Philco Inverter <br>12KG</p>
                    <hr>
                    <p class="descricao"></p><strike>R$ 2.399,00</strike></p>
                    <p class="preco">R$ 2.179,90</p>                   
                </div>   -->       

    <?php
       include_once("footer.html");
    ?>  
    </body>
</html>