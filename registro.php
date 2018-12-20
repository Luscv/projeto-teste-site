<!--CÓDIGO: registro.php-->
<!--PLATAFORMA: uHi-->
<!--ARQUIVOS REFERENCIADOS: db.php, login.php-->
<!--FUNÇÃO: tela onde os usuários vão fazer o cadastro na plataforma-->
<!--ÚLTIMO EDITOR: Henrique-->
<!--DATA: 18/12/2018-->

<!--VARIÁVEIS-->
<!--nome,faculdade,curso,email,senha,verificaemail: variáveis que representam os dados atribuidos ao objeto usuário, a serem inseridas no banco de dados-->
<!--checar_email: verifica se o e-mail registrado já não está presente no banco de dados-->
<!--checagem_email: variável que irá receber o resultado da checagem ao banco de dados, obtendo o numero de linhas que possuem aquele email que está tentando obter cadastro por meio da função mysql_query-->




<!-- início do SCRIPT php para realizar a operação de verificação e efetuação do cadastro-->
<!--o script verifica a veracidade das variáveis, verifica se o email já não se encontra presente no banco de dados, e se tudo for satisfeito, com a variável $query cria no banco de dados um objeto do tipo usuário, que irá possuir os atributos listados e necessários para a criação de sua conta -->

<?php 																
	
	include("db.php");


	if (isset($_POST['criar'])) {
		$nome = $_POST['nome'];
		$faculdade = $_POST['faculdade'];
		$curso = $_POST['curso'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$verificaemail = $_POST['verificaemail'];
	

		$checar_email = mysql_query("SELECT email FROM users WHERE email='$email'");				
		$checagem_email = mysql_num_rows($checar_email);
		if ($checagem_email >= 1) {
			echo '<h3>Você já está cadastrado no nosso mundo! Faça login clicando <a href="login.php">aqui</a></h3>';
		}elseif ($email!= $verificaemail) {
			echo '<h3>Os e-mails que você digitou não são iguais :(</h3>';
		}elseif ($nome == '' OR strlen($nome)<4) {
			echo '<h3>Nosso BOT acha que esse não é o seu nome :(</h3>';
		}elseif ($faculdade == '' OR strlen($faculdade)<2) {
			echo '<h3>Nosso BOT pesquisou até mesmo no gling, e não achou essa faculdade :(</h3>';
		}elseif ($curso == '' OR strlen($curso)<4) {
			echo '<h3>Nosso BOT não encontrou seu curso no nosso amplo servidor :( Que tal trocar de curso? xD</h3>';
		}elseif ($email == '' OR strlen($email)<10) {
			echo '<h3>Nosso BOT acha que esse não é o seu e-mail :(</h3>';
		}elseif ($senha == '' OR strlen($senha)<5) {
			echo '<h3>Escolhe uma senha mais complexa, vai! Que tal mais de 5 caracteres? xD</h3>';
		}else{
			$query = "INSERT INTO users (`nome`,`faculdade`,`curso`,`email`,`senha`) VALUES ('$nome','$faculdade','$curso','$email','$senha')";
			$data = mysql_query($query) or die(mysql_error());
			if ($data) {
				setcookie("login",$email);
				header("Location: ./");
			}else{
				echo "<h3>Ops! Algo errado não está certo :(</h3>";
			}
		}
	}
?>
<!-- fim do SCRIPT php para realizar a operação de verificação e efetuação do cadastro-->
	


?>


<!doctype html>



	<html> 																						<!--Início da tag obrigatória HTML-->



		<head> 																					<!--Início da cabeçalho-->

			<meta charset="utf-8"  /> 							
			<title>uHi - Registre-se agora! </title>    										<!--Título que será exibido na página web-->
			





			<!--início do CSS do código de registro-->
			<style type="text/css">																
				
				form {text-align: center; margin: auto; margin-top: 40px;}
				body {background: url(img/bg2.png); background-size: 100%;}
				input[type="email"]{border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; border-radius: 3px;margin-top: 5px;}
				input[type="text"]{border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; border-radius: 3px;margin-top: 5px;}
				input[type="password"]{border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; border-radius: 3px;margin-top: 5px;}
				div {width: 380px;  margin: auto;}
				h2 {text-align: center; margin-top: 130px; font-family:Gill Sans, sans-serif; color: #FFFF;}
				input[type="submit"]{border:1px solid #9C9C9C; width: 130px; height: 30px;  border-radius: 3px; text-align: auto;background-color: #04B4AE; color:#FFFFFF; }
				h4 {text-align: center; font-family:Gill Sans, sans-serif; color:#FFFF; margin-top: 0px;}
				h3 {text-align: center; font-family:Gill Sans, sans-serif; color:#FFFF; margin-top: 0px;}
				a{text-decoration: none; color:#04B4AE; margin-top: 5px;}




			</style>				
			<!--fim do CSS do código de registro-->

		</head>																					<!--Fim da cabeçalho-->




		<body> 																					<!--Início da tag corpo-->

																								<!--início da div que irá abrigar o formulário de registro-->

				<h2>Nos ajude a preparar seu perfil!</h2>
				<form method="POST">															<!--início do formulário que irá abrigar os dados de registro-->
					<div id="formregistro">
					
					<!--Formulário que vai coletar o nome, faculdade, curso, endereço e senha do usuário-->											

					<br/>
					<input type="text" placeholder="Primeiro e último nome" name="nome"><br/>
					<input type="text" placeholder="Faculdade" name="faculdade"><br/>
					<input type="text" placeholder="Curso" name="curso"><br/>
					<input type="email" placeholder="Endereço de e-mail" name="email"><br/>
					<input type="email" placeholder="Confirme seu endereço de e-mail" name="verificaemail"><br/>
					<input type="password" placeholder="Senha" name="senha"><br/>
					<br/>
					<input type="submit" value="Criar uma conta" name="criar"><br/>
					<br/>
					</div>
					<h4> Já tem uma conta no uHi? <a href="login.php">Faça login agora!</a></h3> 
				</form>
			

		</body>																					<!--Fim da tag corpo-->



	</html> 																					<!--Fim da tag obrigatória HTML e do código em si-->