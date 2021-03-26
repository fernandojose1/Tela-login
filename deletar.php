<?php

include_once ("conexao.php");

	$login_cookie = $_COOKIE['login'];
  	$del_usuario = "DELETE FROM usuarios WHERE login = '$login_cookie'";
  	$resul_del_usuario = mysqli_query ($connect, $del_usuario) or die ("ERRO");
  	echo "Cadastro excluido";

  	mysqli_close($connect);

  	header ("Location: cadastro.html")


?>