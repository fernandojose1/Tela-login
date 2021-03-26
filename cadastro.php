<?php 

include_once ("conexao.php");

$login = $_POST['login'];
$senha = md5($_POST['senha']);
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($connect,$query_select);
$total = mysqli_num_rows($select);

  if($login == "" || $login == null){
      echo"<script language='javascript' type='text/javascript'>
          alert('O login precisa ser preenchido! ');window.location.
          href='cadastro.html'</script>";

    }else{
      if($total>0){

        echo"<script language='javascript' type='text/javascript'>
          alert('Esse login já existe! ');window.location.
          href='cadastro.html'</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($connect,$query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário, tente novamente!');window.location
          .href='cadastro.html'</script>";
        }
      }
    }

 ?>