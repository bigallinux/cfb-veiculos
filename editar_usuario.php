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
          
          <h1>Editar Usuario</h1>
          
          
          
          
          <form name="f_editar_colaborador" action="editar_usuario.php" class="f_colaborador" method="get">
              <input type="hidden" name="num" value="<?php echo $n1; ?>">
              <label>Selecione o colaborador</label>
              <select name="f_colaboradores" size="10">
                  <?php
                  $query = "select * from tb_colaboradores;";
                  $col = mysqli_query($con, $query);
                  $total_col = mysqli_num_rows($col);
                  
                  while ($exibe= mysqli_fetch_array($col)){
                      echo'<option value="'.$exibe["id_colaborador"].'">'.$exibe["nome"].'</option>';
                  };
                  ?>
              </select>
              <input type="submit" name="f_bt_editar_colaborador" class="btmenu" value="editar">
                 
                  
          </form>
          
          <?php
            if(isset($_GET["f_colaboradores"])){
                $vid = $_GET["f_colaboradores"];
                $query = "select * from tb_colaboradores where id_colaborador=$vid";
                $col = mysqli_query($con, $query);
                $exibe = mysqli_fetch_array($col);
                if($exibe>=1){
                    echo'
              <form name="f_edita_colaborador" action="editar_usuario.php" class="f_colaborador" method="get">
              <input type="hidden" name="num" value="'.$n1.'">
              <input type="hidden" name="id" value="'.$exibe["id_colaborador"].'"
              <label>Nome</label>
              <input type="text" name="f_nome" maxlength="50" size="50" required="required" value="'.$exibe["nome"].'" >
              <label>UserName</label>
              <input type="text" name="f_user" maxlength="50" size="50" required="required" value="'.$exibe["username"].'">
              <label>Senha</label>
              <input type="text" name="f_senha" maxlength="50" size="50" required="required" value="'.$exibe["senha"].'">
              <label>Acesso</label>
              <input type="text" name="f_acesso" maxlength="50" size="50" required="required" pattern="[0-1]+$" placeholder="0 ou 1"  title="0 ou 1" value="'.$exibe["acesso"].'">
              <input type="submit" name="f_bt_edita_colaborador" class="btmenu" value="gravar">
                 
                  
          </form>';
                }
            }
          ?>
          
          <?php
            if(isset($_GET["f_bt_edita_colaborador"])){
                $vid=$_GET["id"];
                $vnome=$_GET["f_nome"];
                $vusername=$_GET["f_user"];
                $vsenha =$_GET["f_senha"];
                $vacesso=$_GET["f_acesso"];
                $query = "update tb_colaboradores set nome='$vnome', username='$vusername', senha='$vsenha', acesso=$vacesso where id_colaborador=$vid";
                mysqli_query($con, $query);
                $linhas= mysqli_affected_rows($con);
                if($linhas>=1){
                    header('location:editar_usuario.php?num='.$n1);
                    //echo'<p>Colaborador alterado com sucesso</p>';
                }else{
                    echo '<p>Erro ao tentar alterar colaborador</p>';
                };
            };
          ?>
      </section>
  </body>
  
</html>