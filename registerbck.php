<?php
	class Usuario{
  		public $nome;
		public $faculdade;
  		public $curso;
		private $email;
		private $senha;
		private $verificaemail;
	}

	include("db.php");

	function criauser($nome, $faculdade, $curso, $email, $senha){
  		$newuser = new Usuario();
  		if (isset($_POST['criar'])) {
			$newuser->nome = $_POST['nome'];
			$newuser->faculdade = $_POST['faculdade'];
			$newuser->curso = $_POST['curso'];
			$newuser->email = $_POST['email'];
			$newuser->senha = $_POST['senha'];
			$newuser->verificaemail = $_POST['verificaemail'];
	

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
	}
?>

<!-- fim do SCRIPT php para realizar a operação de verificação e efetuação do cadastro-->
	

	
