<?php
    session_start();
    if(isset($_SESSION["numlogin"])){
        $n1=$_GET["num"];
        $n2=$_SESSION["numlogin"];
        if($n1!=$n2){
            echo '<p>Login não efetuado</p>';
            exit;
        }
    }else{
        echo '<p>Login não efetuado</p>';
            exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <script src="java/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#menuB1,#menuB2,#menuB3,#menuB4").css("visibility","hidden");
            $("#menuA1").click(function(){
                $("#menuB1").css("visibility","visible");
                $("#menuB2").css("visibility","hidden");
                $("#menuB3").css("visibility","hidden");
                $("#menuB4").css("visibility","hidden");
            });
            $("#menuA2").click(function(){
                $("#menuB1").css("visibility","hidden");
                $("#menuB2").css("visibility","visible");
                $("#menuB3").css("visibility","hidden");
                $("#menuB4").css("visibility","hidden");
            });
            $("#menuA3").click(function(){
                $("#menuB1").css("visibility","hidden");
                $("#menuB2").css("visibility","hidden");
                $("#menuB3").css("visibility","visible");
                $("#menuB4").css("visibility","hidden");
            });
            $("#menuA4").click(function(){
                $("#menuB1").css("visibility","hidden");
                $("#menuB2").css("visibility","hidden");
                $("#menuB3").css("visibility","hidden");
                $("#menuB4").css("visibility","visible");
            });
            $("#menuB1,#menuB2,#menuB3,#menuB4").mouseover(function(){
                $(this).css("visibility","visible");
            });
            $("#menuB1,#menuB2,#menuB3,#menuB4").mouseout(function(){
                $(this).css("visibility","hidden");
            });
        });
    </script>
    <title>CFB Veiculos</title>
  </head>
  <body>
      <header>
          <?php
            include_once 'topo.php';
          ?>
      </header>
      
      <section>
          <p>Menu principal de gerenciamento</p>
      </section>
      
      <nav>
          <div class="menu_ger">
              <button id="menuA1" class="btmenu">carros</button>
              <div  id="menuB1" class="menuB">
                  <a href="#" target="_self">novo</a>
                  <a href="#" target="_self">editar</a>
                  <a href="#" target="_self">excluir</a>
                  <a href="#" target="_self">marcas</a>
              </div>
          </div>
          <div class="menu_ger">
              <button  id="menuA2"class="btmenu">slider</button>
              <div id="menuB2"  class="menuB">
                  <a href="#" target="_self">configurar</a>
                  
              </div>
          </div>
          <?php
          if($_SESSION["acesso"]==1){
          echo'
          <div class="menu_ger">
              <button  id="menuA3" class="btmenu">usuarios</button>
              <div id="menuB3" class="menuB">
                  <a href="novo_usuario.php?num='.$n1.'" target="_self">novo</a>
                  <a href="editar_usuario.php?num='.$n1.'" target="_self">editar</a>
                  <a href="excluir_usuario.php?num='.$n1.'" target="_self">excluir</a>
                  
              </div>
          </div>';
                    }
                  ?>
          <div class="menu_ger">
              <button  id="menuA4" class="btmenu">logoff</button>
              <div id="menuB4" class="menuB">
                  <a href="#" target="_self">sair</a>
              </div>
          </div>
      </nav>
      
  </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

