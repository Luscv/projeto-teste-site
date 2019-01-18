<!--CÓDIGO: login.php-->
<!--PLATAFORMA: uHi-->
<!--ARQUIVOS REFERENCIADOS: db.php, registro.php, masterlogin.php-->
<!--FUNÇÃO: tela onde os usuários registrados poderão fazer login-->
<!--ÚLTIMO EDITOR: Henrique-->
<!--DATA: 14/01/2019-->


<!--SCRIPT php referenciando os arquivos master db e login-->
<?php 	 															
	
	include("db.php");
	include ("masterlogin.php")

?>


<!DOCTYPE html> 																		
	
	<html> 																				
		<head>  																		
			
			
				<!--início do estilo css do código, dos elementos referenciados-->
				<style type="text/css">																						
					
					
					h2 {text-align: center; margin: auto; margin-top: 180px; color: #FFFFFF;font-family: }
					form{text-align: center; margin: auto; margin-top: 20px;}
					*{font-family:Gill Sans, sans-serif;}
					input[type="email"]{border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; border-radius: 10px;}
					input[type="password"]{border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; margin-top: 10px; border-radius: 10px;}
					input[type="submit"]{border:1px solid #9C9C9C; width: 100px; height: 35px; margin-top: 20px; border-radius: 3px; text-align: center;background-color: #04B4AE; color:#FFFFFF; }
					body {background: url(img/bg.png); background-size: 100%;}
					h3{text-align: center; color: #1E90FF; margin-top: 15px;}
					a{text-decoration: none; color:#04B4AE; margin-top: 5px;}
					h4{text-align: center; color: #FFFFFF; margin-top: 25px;}
					


				</style>					                         													
				<!--fim do estilo css do código, dos elementos referenciados-->
				

				
		</head>                                                                         					<!--fim do cabeçalho do código-->

		
		<body>																								<!--início do corpo do código-->

									                                               							
			
			                                                                 					
					
					<h2>Seja bem-vindo ao nosso mundo! ;)</h2>                                            	<!--mensagem exibida acima do formulário de login-->
			<form method="POST"> 																			<!--início da tag form, relacionada ao login-->

																											<!--utilização do método POST, para tratar os dados do formulário de login-->

						<input type="email" placeholder="Endereço de e-mail" name="email"><br/>             <!--Campo para inserção do endereço de e-mail-->
						<input type="password" placeholder="Insira sua senha" name="senha"><br/>            <!--Campo para inserção da senha-->
						<input type="submit" value="Entrar" name="entrar"><br/>                 			<!--Campo para que o usuário efetue a entrada-->
				

	
			</form>

				<style type="text/css">																		
					h3 {color:#FFFFFF;}
				</style>
				<h4> Ainda não tem uma conta? <a href="registro.php">Registre-se agora!</a></h3>            <!--Link para a página de registro de novas c,-->

		</body>																								<!--fim do corpo do código-->


	</html>																									<!--fechamento da tag obrigatória HTML-->