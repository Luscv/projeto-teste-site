<!--CÓDIGO: registro.php-->
<!--PLATAFORMA: uHi-->
<!--ARQUIVOS REFERENCIADOS: db.php, login.php, masteregistro.php-->
<!--FUNÇÃO: tela onde os usuários irão fazer o cadastro de conta na plataforma-->
<!--ÚLTIMO EDITOR: Henrique-->
<!--DATA: 14/01/2019-->


<!--SCRIPT php referenciando os arquivos master db e registro-->
<?php 	 															
	
	include("db.php");
	include ("masterregistro.php")

?>

	





<!doctype html>



	<html> 																						



		<head> 																					

			<meta charset="utf-8"  /> 							
			<title>uHi - Registre-se agora! </title>    										<!--Título que será exibido na página web-->
			





			<!--início do CSS do código de registro-->
			<style type="text/css">																
				
				form {text-align: center; margin: auto; margin-top: 40px;}
				body {background-color: FFFFFF; background-size: 100%;}
				input[type="email"]{border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; border-radius: 3px;margin-top: 5px;}
				input[type="text"]{border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; border-radius: 3px;margin-top: 5px; font-family: Arial, sans-serif; color:#000000;}
				input[type="password"]{border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; border-radius: 3px;margin-top: 5px;}
				div {width: 380px;  margin: auto;}
				h2 {text-align: center; margin-top: 130px; font-family:Gill Sans, sans-serif; color: #FFFF;}
				input[type="submit"]{border:1px solid #9C9C9C; width: 130px; height: 30px;  border-radius: 3px; text-align: auto;background-color: #04B4AE; color:#FFFFFF;  }
				h4 {text-align: center; font-family:Gill Sans, sans-serif; color:#FFFF; margin-top: 0px;}
				h3 {text-align: center; font-family:Gill Sans, sans-serif; color:#FFFF; margin-top: 0px;}
				a{text-decoration: none; color:#04B4AE; margin-top: 5px;}
				#selectcurso {background-color: #FFFF;border: 3px solid #9C9C9C; width: 300px; height: 30px; padding-left: 10px; border-radius: 3px;margin-top: 5px; font-family: Arial, sans-serif; padding-left: 5px;}
				
				::-webkit-input-placeholder {
   				color: black;
  				 font: 13px Gill Sans, sans-serif;
				}

				:-moz-placeholder {
   				color: black;
   				font: 12px Gill Sans, sans-serif;
				}

				::-moz-placeholder {
  				color: black;  
   				font: 12px Gill Sans, sans-serif;
				}

				:-ms-input-placeholder {  
  				color: black;  
  				font: 12px Gill Sans, sans-serif;
				}





			</style>				
			<!--fim do CSS do código de registro-->

		</head>																					



		<body> 																					

																								<!--início da div que irá abrigar o formulário de registro-->

				<h2>Nos ajude a preparar seu perfil!</h2>
				<form method="POST">															<!--início do formulário que irá abrigar os dados de registro-->
					<div id="formregistro">
					
					<!--Formulário que vai coletar o nome, faculdade, curso, endereço e senha do usuário-->											

					<br/>
					<input type="text" maxlength="25" placeholder="Primeiro e último nome" name="nome"><br/>
					<input type="text" maxlength="10" placeholder="Faculdade" name="faculdade"><br/>
					<select id="selectcurso" name=curso ><br/>
					<option value="">Curso</option>

					<option value="Agronomia">Agronomia</option><option value="Agroindústria">Agroindústria</option><option value="Ciências Agrícolas">Ciências Agrícolas</option><option value="Ciências Agrárias">Ciências Agrárias</option><option value="Arquitetura">Arquitetura</option><option value="Arquitetura e Urbanismo">Arquitetura e Urbanismo</option><option value="Artes Plásticas">Artes Plásticas</option><option value="Música">Música</option><option value="Dança">Dança</option><option value="Teatro">Teatro</option><option value="Artes Cênicas">Artes Cênicas</option><option value="Astronomia">Astronomia</option><option value="Biologia">Biologia</option><option value="Biotecnologia">Biotecnologia</option><option value="Bioquímica">Bioquímica</option><option value="Ciências Biológicas">Ciências Biológicas</option><option value="Biomedicina">Biomedicina</option><option value="Microbiologia">Microbiologia</option><option value="Direito">Direito</option><option value="Ciências Jurídicas e Sociais">Ciências Jurídicas e Sociais</option><option value="Ciências Atuariais">Ciências Atuariais</option><option value="Design">Design</option><option value="Design Gráfico">Design Gráfico</option><option value="Design de Moda">Design de Moda</option><option value="Estilismo e Moda">Estilismo e Moda</option><option value="Desenho Industrial">Desenho Industrial</option><option value="Desenho e Plástica">Desenho e Plástica</option><option value="Decoração">Decoração</option><option value="Ecologia">Ecologia</option><option value="Ciências Ambientais">Ciências Ambientais</option><option value="Ciências Físicas">Ciências Físicas</option><option value="Ciências Biomoleculares">Ciências Biomoleculares</option><option value="Enfermagem ">Enfermagem </option><option value="Engenharia Ambiental">Engenharia Ambiental</option><option value="Engenharia Agrícola">Engenharia Agrícola</option><option value="Engenharia Agronômica">Engenharia Agronômica</option><option value="Engenharia Cartográfica">Engenharia Cartográfica</option><option value="Engenharia Civil">Engenharia Civil</option><option value="Engenharia de agrimensura">Engenharia de agrimensura</option><option value="Engenharia de alimentos">Engenharia de alimentos</option><option value="Engenharia de Bioprocesso">Engenharia de Bioprocesso</option><option value="Engenharia da computação">Engenharia da Computação</option><option value="Engenharia da informação">Engenharia da Informação</option><option value="Engenharia de controle e automação">Engenharia de Controle e Automação</option><option value="Engenharia de materiais">Engenharia de Materiais</option><option value="Engenharia de minas">Engenharia de Minas</option><option value="Engenharia de pesca">Engenharia de Pesca</option><option value="Engenharia de petróleo">Engenharia de Petróleo</option><option value="Engenharia de Produção">Engenharia de Produção</option><option value="Engenharia de Produção Civil">Engenharia de Produção Civil</option><option value="Engenharia de Produção elétrica">Engenharia de Produção elétrica</option><option value="Engenharia de produção mecânica">Engenharia de Produção Mecânica</option><option value="Engenharia de telecomunicações">Engenharia de telecomunicações</option><option value="Engenharia elétrica">Engenharia elétrica</option><option value="Engenharia Eletrônica">Engenharia Eletrônica</option><option value="Engenharia Teleinformática">Engenharia Teleinformática</option><option value="Engenharia Física">Engenharia Física</option><option value="Engenharia Florestal">Engenharia Florestal</option><option value="Engenharia Geológica">Engenharia Geológica</option><option value="Engenharia Hídrica">Engenharia Hídrica</option><option value="Engenharia industrial de controle e automação">Engenharia Industrial de Controle e Automação</option><option value="Engenharia industrial">Engenharia Industrial</option><option value="Engenharia industrial e madeireira">Engenharia Industrial e Madeireira</option><option value="Engenharia industrial e madeireira">Engenharia Industrial e Mecânica</option><option value="Engenharia Mecatrônica">Engenharia Mecatrônica</option><option value="Engenharia Engenharia Mecânica">Engenharia Engenharia Mecânica</option><option value="Engenharia Metalúrgica">Engenharia Metalúrgica</option><option value="Engenharia Naval e Oceânica">Engenharia Naval e Oceânica</option><option value="Engenharia Química">Engenharia Química</option><option value="Engenharia Sanitária">Engenharia Sanitária</option><option value="Engenharia Teleinformática">Engenharia Teleinformática</option><option value="Engenharia Têxtil">Engenharia Têxtil</option><option value="Estatística"> Estatística</option><option value="Estilismo e Moda"> Estilismo e Moda</option><option value="Estudos Literários ">  Estudos Literários </option><option value="Estética ">Estética</option><option value="Estética e Cosmética">Estética e Cosmética </option><option value="Famárcia">Famárcia </option><option value="Famárcia Bioquímica">Famárcia Bioquímica </option><option value="Filosofia">Filosofia </option><option value="Fonoaudiologia">Fonoaudiologia </option><option value="Física ">Física  </option><option value="Geografia ">Geografia </option><option value="Geologia">Geologia </option><option value="Gestão Ambiental">Gestão Ambiental </option><option value="Gestão da Informação">Gestão da Informação </option><option value="Gestão de Agronegócios">Gestão de Agronegócios </option><option value="Gestão de Agronegócios">Gestão de Agronegócios </option><option value="Gestão de Cooperativas">Gestão de Cooperativas </option><option value="História">História </option><option value="Hotelaria">Hotelaria</option><option value="Informática Biomédica">Informática Biomédica</option><option value="Letras">Letras</option><option value="Matemática">Matemática</option><option value="Matemática">Matemática</option><option value="Matemática Computacional">Matemática Computacional</option><option value="Medicina">Medicina</option><option value="Metereologia">Metereologia</option><option value="Microbiologia">Microbiologia</option><option value="Museologia">Museologia</option><option value="Música">Música</option><option value="Obstetrícia">Obstetrícia</option><option value="Oceanografia">Oceanografia</option><option value="Oceanologia">Oceanologia</option><option value="Oceanologia">Oceanologia</option><option value="Pedagogia">Pedagogia</option><option value="Pedagogia e Psicopedagogia ">Pedagogia e Psicopedagogia </option><option value="Pedagogia e Psicopedagogia ">Pedagogia e Psicopedagogia </option><option value="Psicologia ">Psicologia </option><option value="Química Industrial ">Química Industrial </option><option value="Química Tecnológica ">Química Tecnológica</option><option value="Química Tecnológica ">Química Tecnológica</option><option value="Relações Internacionais ">Relações Internacionais</option><option value="Secretariado ">Secretariado</option><option value="Secretariado Executivo ">Secretariado Executivo</option><option value="Secretariado Executivo ">Secretariado Executivo</option><option value="Serviço Social">Serviço Social</option><option value="Teatro">Teatro</option><option value="Tecnologia  em Alimentos">Tecnologia  em Alimentos</option><option value="Tecnologia  em Alimentos">Tecnologia  em Alimentos</option><option value="Tecnologia em Sistemas de Informação ">Tecnologia em Sistemas de Informação</option><option value="Tecnologia Mecânica ">Tecnologia Mecânica </option><option value="Tecnologia Oftálmica ">Tecnologia Oftálmica </option><option value="Tradução">Tradução</option><option value="Veterinária ">Veterinária </option><option value="Zootecnia ">Zootecnia </option>
				

					<input type="email"  maxlength="45"  placeholder="Endereço de e-mail" name="email"><br/>
					<input type="email"  maxlength="45"  placeholder="Confirme seu endereço de e-mail" name="verificaemail"><br/>
					<input type="password" maxlength="20" placeholder="Senha" name="senha"><br/>
					<br/>
					<input type="submit" value="Criar uma conta" name="criar"><br/>
					<br/>
					</div>
					<h4> Já tem uma conta no uHi? <a href="login.php">Faça login agora!</a></h3> 
				</form>
			

		</body>																					



	</html> 																					