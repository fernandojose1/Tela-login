<?php 

include_once ("conexao.php");

$login_cookie = $_COOKIE['login'];
$senha_cookie = md5($_POST['senha']);

if ($connect) {
	
	$edit_usuario = mysqli_query ($connect, "UPDATE usuarios SET senha='$senha_cookie' WHERE login = '$login_cookie';");

	if ($edit_usuario) {
		header("Location: login.html");
	} else {

		die("Erro: ". mysqli_error($connect));

	}

}else {

	die("ERRO: ". mysqli_error($connect));
}

mysqli_close($connect);

 ?>