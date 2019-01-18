<?php
	include 'registerbck.php';
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



	</html> 	
