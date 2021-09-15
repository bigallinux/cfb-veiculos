<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
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
          <div class="menu_ger">
              <button  id="menuA3" class="btmenu">usuarios</button>
              <div id="menuB3" class="menuB">
                  <a href="#" target="_self">novo</a>
                  <a href="#" target="_self">editar</a>
                  <a href="#" target="_self">excluir</a>
                  
              </div>
          </div>
          <div class="menu_ger">
              <button  id="menuA4" class="btmenu">logoff</button>
              <div id="menuB4" class="menuB">
                  <a href="" target="_self">sair</a>
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

