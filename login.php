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
      

<?php
    if(isset($_POST["f_logar"])){
        $user=$_POST["f_user"];
        $senha=$_POST["f_senha"];
        
        //mysql
        include 'conexao.inc';
        
        $sql="select * from tb_colaboradores where username='$user' and senha='$senha';";
        
        $res= mysqli_query($con, $sql);
        
        //$ret= mysqli_affected_rows($con);
        $ret= mysqli_fetch_array($res);
        
        
        //checagem de login
        //if(($user!="fbigal") or($senha!="123")){
        if ($ret == 0){
            echo '<p id=lgErro>Login incorreto</p>';
        }else{
            $chave1="abcdefghijklmnopqrstuvwxyz";
            $chave2="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $chave3="0123456789";
            $chave= str_shuffle($chave1.$chave2.$chave3);
            $tam=strlen($chave);
            $num="";
            $qtde= rand(20, 50);
            for($i=0; $i<$qtde;$i++){
                $pos= rand(0, $tam);
                $num.= substr($chave, $pos,1);
            }
            session_start();
                $_SESSION['numlogin']=$num;
                $_SESSION['username']=$user;
                $_SESSION['acesso']=$ret['acesso']; //0=restrito; 1 = total
                header("location:gerenciamento.php?num=$num");
        }
        mysqli_close($con);
    }
    
?>

<form action="login.php" method="post" name="f_login" id="f_login">
              <label>Usuario</label>
              <input type="text" name="f_user">
              <label>Senha</label>
              <input type="password" name="f_senha">
              <input type="submit" value="Logar" name="f_logar">
          </form>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


