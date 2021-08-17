<?php
    if(isset($_POST["f_logar"])){
        $user=$_POST["f_user"];
        $senha=$_POST["f_senha"];
        
        //mysql
        
        if(($user!="fbigal") or($senha!="123")){
            echo '<p id=lgErro>Login incorreto</p>';
        }else{
            $chave1="abcdefghijklmnopqrstuvwxyz";
            $chave2="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $chave3="";
        }
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


