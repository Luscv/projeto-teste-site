<!--CÓDIGO: masterlogin.php-->
<!--PLATAFORMA: uHi-->
<!--ARQUIVOS REFERENCIADOS: registro.php -->
<!--FUNÇÃO: tela onde os usuários registrados poderão fazer login-->
<!--ÚLTIMO EDITOR: Henrique-->
<!--DATA: 14/01/2019-->

<!--VARIÁVEIS-->
<!--nome: variável que vai abrigar o nome do usuário cadastrado-->
<!--faculdade: variável que vai abrigar a faculdade do usuário cadastrado-->
<!--curso: variável boleana para verificar a autenticidade da senha e do e-mail-->
<!--email: variável referente ao EMAIL do usuário cadastrado-->
<!--senha: variavel que vai abrigar a senha do usuário cadastrado-->
<!--newuser: variável do tipo objeto da classe Usuário, após o cadastro será criado esse objeto newuser-->
<!--criar: variavel do tipo submit, acionada para realizar a operação de cadastro-->



<!--LÓGICA do código: primeiramente os atributos da classe Usuário são declarados, e o arquivo "db.php" é inserido, fazendo o teste/conexão com o banco de dados, se o botão criar for acionado, as variáveis são preenchidas através dos formulários, se nenhuma das travas for infringidas, no sentido de não atender aos requisitos evidenciados nas mensagens de erro que irão aparecer para o usuário. Se todos esses fatores ocorrerem de foram correta, as variáveis são inseridas no banco de dados, na lista user conforme explícito no código fonte abaixo. -->



<?php
	class Usuario{

  		public $nome;
		public $faculdade;
  		public $curso;
		public $email;
		public $senha;
		public $verificaemail;
	}
	
	include("db.php");

  		$newuser = new Usuario();

  		if (isset($_POST['criar'])) {

			
  			$nome = $_POST['nome'];
			$faculdade = $_POST['faculdade'];
			$curso = $_POST['curso'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$verificaemail = $_POST['verificaemail'];


			$newuser->nome = $_POST['nome'];
			$newuser->faculdade = $_POST['faculdade'];
			$newuser->curso = $_POST['curso'];
			$newuser->email = $_POST['email'];
			$newuser->senha = $_POST['senha'];
			$newuser->verificaemail = $_POST['verificaemail'];
	
			$checar_email = $mysqli->query("SELECT * from users WHERE email = '$email'");
			$checagem_email = mysqli_num_rows($checar_email);
			
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
				$resultuser = "INSERT INTO users (`nome`, `faculdade`, `curso`, `email`, `senha`) values ('$nome', '$faculdade', '$curso', '$email', '$senha')";
				$resultuser = mysqli_query($mysqli, $resultuser);
				if (mysqli_connect($resultuser)){
                    echo "<h3>registro feito com sucesso!</h3>";
				}else{
					echo "<h3>Ops! Algo errado não está certo :(</h3>";
				}
			}
		}
?>