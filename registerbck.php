<?php
	class user{
		public $nome;
		public $faculdade;
		public $curso;
		private $email;
		private $senha;
		public function criauser($nome, $faculdade, $curso, $email, $senha){
		}
	}

	include("db.php");
	
	public function criauser($nome, $faculdade, $curso, $email, $senha){
		
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

				echo '<h3>Voc� j� est� cadastrado no nosso mundo! Fa�a login clicando <a href="login.php">aqui</a></h3>';

			}elseif ($email!= $verificaemail) {

				echo '<h3>Os e-mails que voc� digitou n�o s�o iguais :(</h3>';

			}elseif ($nome == '' OR strlen($nome)<4) {

				echo '<h3>Nosso BOT acha que esse n�o � o seu nome :(</h3>';

			}elseif ($faculdade == '' OR strlen($faculdade)<2) {

				echo '<h3>Nosso BOT pesquisou at� mesmo no gling, e n�o achou essa faculdade :(</h3>';

			}elseif ($curso == '' OR strlen($curso)<4) {

				echo '<h3>Nosso BOT n�o encontrou seu curso no nosso amplo servidor :( Que tal trocar de curso? xD</h3>';

			}elseif ($email == '' OR strlen($email)<10) {

				echo '<h3>Nosso BOT acha que esse n�o � o seu e-mail :(</h3>';

			}elseif ($senha == '' OR strlen($senha)<5) {

				echo '<h3>Escolhe uma senha mais complexa, vai! Que tal mais de 5 caracteres? xD</h3>';

			}else{

				$query = "INSERT INTO users (`nome`,`faculdade`,`curso`,`email`,`senha`) VALUES ('$nome','$faculdade','$curso','$email','$senha')";
				$data = mysql_query($query) or die(mysql_error());

				if ($data) {

					setcookie("login",$email);
					header("Location: ./");

				}else{

					echo "<h3>Ops! Algo errado n�o est� certo :(</h3>";

				}
			}
		}
	}
?>

<!-- fim do SCRIPT php para realizar a opera��o de verifica��o e efetua��o do cadastro-->
	

	