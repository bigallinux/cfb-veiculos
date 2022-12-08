<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <title>CFB Veiculos</title>
    <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        date_default_timezone_set('America/Sao_Paulo');
        ?>
  </head>
  <body>
      <header>
          <?php
            include_once 'topo.php';
          ?>
      </header>
      
      <section id="slider">
          <?php
                    include_once 'slider.html';
          ?>
      </section>
      
      <section id="buscador">
          <?php
                    include_once 'buscador.php';
          ?>
      </section>
      <section id="destaques">
          <?php
                    include_once 'destaques.html';
          ?>
      </section>
      
      <footer>
          <?php
                    include_once 'rodape.html';
          ?>
      </footer>
      <main></main>
    <footer></footer>
  </body>
</html>
