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
    include 'conexao.inc';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
      <header>
          <?php
            include_once 'topo.php';
          ?>
      </header>
      
      <section id="main">
          <a href="gerenciamento.php?num=<?php echo $n1; ?>" target="_self" class="btmenu">voltar</a>
          
          <h1>Marcas / Modelos</h1>
          
          <?php
            
          
          ?>
          
          <div id="f_add">
              <form name="f_nova_marca" action="marcas_modelos.php" method="get" class="">
                  <input type="hidden" name="num" value="<?php echo $n1; ?>">
                  <input type="hidden" name="codigo" value="1">
                  <label>Nova Marca</label>
                  
                  <input type="text" name="f_marca" maxlength="50" size="50" required="required"><!-- marca -->
                  <input type="submit" value="Grava marca" class="btmenu" name="f_bt_nova_marca">
                  
                  
              </form>
              <form name="f_novo_modelo" action="marcas_modelos.php" method="get" class="">
                  <input type="hidden" name="num" value="<?php echo $n1; ?>">
                  <input type="hidden" name="codigo" value="2">
                  <label>Selecione um marca</label>
                  <select name="f_marcas" size="10" required="required">
                      <?php
                        $sql="Select * from tb_marcas;";
                        $col= mysqli_query($con, $sql);
                        //$total_col= mysqli_num_rows($col);
                        while ($exibe= mysqli_fetch_array($col)) {
                            echo "<option value='".$exibe['id_marca']."'>".$exibe['marca']."</option>";
                        }
                      ?>
                  </select>
                  <label>Novo modelo</label>
                  
                  <input type="text" name="f_modelo" maxlength="50" size="50" required="required"><!-- marca -->
                  <input type="submit" value="Grava modelo" class="btmenu" name="f_bt_novo_modelo">
                  
                  
              </form>
          </div>
          <div id ="f_del">
              
          </div>
      </section>
  </body>
  
</html>