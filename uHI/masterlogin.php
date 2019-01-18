<!--CÓDIGO: masterlogin.php-->
<!--PLATAFORMA: uHi-->
<!--ARQUIVOS REFERENCIADOS: registro.php -->
<!--FUNÇÃO: tela onde os usuários registrados poderão fazer login-->
<!--ÚLTIMO EDITOR: Henrique-->
<!--DATA: 14/01/2019-->

<!--VARIÁVEIS-->
<!--entrar: variável presente no  botão de ENTRAR, do tipo submit-->
<!--senha: variável referente a SENHA usuário cadastrado-->
<!--email: variável referente ao EMAIL do usuário cadastrado-->
<!--verifica: variável boleana para verificar a autenticidade da senha e do e-mail-->


<!--início do script php que realiza a operação de login-->
<!--há inclusão do arquivo db.php que realiza a verificação de conexão com o banco de dados-->
<!--se a variável $verifica recebe um valor maior ou igual a 0, (false boleano) a mensagem de erro é exibida-->
<!--se a variável $verifica recebe um valor verdadeiro, o login é realizado-->

<!--LÓGICA do código: se o usuário "aciona" o botão criar, pelo método POST, verifica vai procurar no banco de dados se existe um email e senha iguais em conjunto no banco de dados, se esse valor for menor ou igual a 0, quer dizer que a senha e/ou o e-mail estão errrados. Senão, a operação de login é realizada, e a SESSION 'logado' recebe valor true-->


<?php 																
	
	session_start();															

	if (isset($_POST['entrar'])) {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$verifica = $mysqli->query("SELECT * from users WHERE email = '$email' AND senha = '$senha'");
		if (mysqli_num_rows($verifica)<=0) {
			echo "<h3>Senha ou e-mail inválidos!</h3>";
		}else{
			setcookie("login",$email);
			$_SESSION['logado'] = true;
			header("Location:interna.php");
			
		}
	}
?>


