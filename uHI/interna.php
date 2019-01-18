<?php
	
	session_start();

	if (!isset ($_SESSION['logado'])) {
		
		header ("location:index.php");
		session_destroy();
	}


?>



<!--Identificador de documento HTML-->
<!doctype html>



<html> 												<!--Início da tag obrigatória HTML-->



<head> 												<!--Início da cabeçalho-->

<title> Título da Página </title> 					<!--Utilização da tag title-->
<meta charset="utf-8"  /> 							<!--Fechamento do tipo selfclose, fechada dentro da própria abertura-->
													<!--tag atributo ="valor" /> = -->

</head>												<!--Fim da cabeçalho-->




<body> 												<!--Início da tag corpo-->
<h1>Local onde ficará a página de perfil</h1>       <!--tag cabeçalho tamanho 1-->
<p> Este é apenas um <strong> parágrafo </strong> da página. <br/> E esta é a <em>segunda</em> linha do parágrafo. </p>  <!--tag de parágrafo com <br>  para itálico, <strong> para negrito, e  <em> para quebra de linha-->


</body>												<!--Fim da tag corpo-->



</html> 											<!--Fim da tag obrigatória HTML-->