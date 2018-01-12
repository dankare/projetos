<!DOCTYPE html>
<!--Comentários não são interpretados -->
<!--lang="pt-br" (português do Brasil) -->
<html lang="pt-br"><!-- início do código -->

<!--bastidores do site -->
<head>
	<meta charset = "utf-8"><!-- encoding (codificação Brasil)-->
	<!--Título na guia do site IMPORTANTE SEO -->
	<title>Espaço Mulher</title>
	<!--a linha abaixo insere um ícone na guia do site -->
	<link rel="icon" href="imagens/favicon.png">
	<!--a linha abaixo descreve o site para os mecanismos de busca SEO -->
	<meta name= "description" content="Agende uma avaliação estética gratuita">
	<!--a linha abaixo garante a visualização de forma única e padronizada em cada dispositivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- link com a folha de estilo -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- usando um CDN para linkar a biblioteca jQuery 
	CDN (Content Delivery Network) "servidor externo" -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<!--conteúdo do site -->
<body>
	<!-- criando uma divisão para centralizar o site-->
	<div id="main"> <!--inicio div principal, id cria uma "variável" única"-->
	<!-- Cabeçalho -->
	<header>
	<!-- redes sociais -->
	<div id="social"><!-- inicio div redes sociais -->
	<!-- a linha abaixo insere uma imagem clicável
	alt (descreve a imagem (acessibilidade e SEO))
	target="_blank" (abre a página em outra aba do navegador)
	a href (criar links)
	img src (inserir imagem)
	-->
		<span>(11) 98586-1705</span>
		<img src="imagens/whats.png" alt="Face do D&B Espaço Mulher">
		<a href="https://www.facebook.com/DB-Espa%C3%A7o-Mulher-1338181342926545/"" target="_blank"><img src="imagens/face.png" alt="WhatsApp do D&B Espaço Mulher"></a>

		
	</div><!-- fim div redes sociais -->
	<!-- logotipo -->
	<div id="logotipo"<!-- inicio div logotipo -->	
		<!-- usando um texto no lugar do logo usar h1 SEO -->
		<a href="index.html">	<img src="logo.png"></a>
		
		<!-- usando uma imagem no logotipo -->
		<!-- usar o atributo title (exibe um texto ao passar o mouse-->
		<!-- linkar o domínio -->
		<!--<a href="http://roboticapratica.com.br/"><img src ="imagens/logo.png" alt="Robótica Prática" title="Robótica Prática"></a>-->
	</div><!-- fim div logotipo -->	
	</header>
	
	<!-- Menu -->
	<nav class="Menu"><!-- class="Menu" usado no jQuery para fixar o menu -->
		<!-- a linha abaixo é usada no menu responsivo -->
		<!-- &#9776 (caractere unicode do menu hamburguer) -->
		<!-- &nbsp; (caractere unicode de espaço em branco) -->
		<a href="#" class="Mobile">&#9776;&nbsp;Menu</a>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="sobre.html">Sobre</a></li>
			<!-- a classe Detalhes será usada para desenhar um triângulo no CSS e também desativar o click vis jQuery -->
			<li><a href="" class="Detalhes">Estética Facial </a>
				<ul>
					<li><a href="limpeza_pele/limpeza_de_pele.html">Limpeza de Pele</a></li>
					<li><a href="peeling_de_diamante/peeling_de_diamante.html">Peeling de Diamante</a></li>
					<li><a href="peeling_de_tomate/peeling_de_tomate.html">Peeling de Tomate</a></li>
					<li><a href="esfoliacao/esfoliacao.html">Esfoliação</a></li>
					<li><a href="#">Tratamento Para Acne</a></li>
					<li><a href="#">Tratamento para Rugas</a></li>
					<li><a href="#">Massagem modeladora</a></li>
					<li><a href="#">Drenagem Linfática facial</a></li>
					<li><a href="#">Hidratação Facial</a></li>
					<li><a href="#">Lifeting</a></li>
					<li><a href="#">Clareamento de Pele</a></li>
				</ul>
			</li>
			<li><a href="" class="Detalhes">Estética Corporal </a>
				<ul>
					<li><a href="#">Massagem Pedras Quentes</a></li>
					<li><a href="#">Massagem Drenomodeladora</a></li>
					<li><a href="#">Afinado Corporal</a></li>
					<li><a href="#">Redução de Medidas</a></li>
					<li><a href="tratamento_p_flacidez_celulite_gordura_estria/tratamento_p_flacidez_celulite_gordura_estria.html">Tratamento para Flacidez, Celulite, Gordura, Estria</a></li>
					
					<li><a href="endermoterapia/endermoterapia.html">Endermoterapia</a></li>
					<li><a href="#">Corrente Russa</a></li>
					<li><a href="#">Lipocavitação</a></li>
					<li><a href="#">Depilação</a></li>
					<li><a href="#">Massagem Bambu Terapia</a></li>
					<li><a href="#">Massagem Gesso Terapia</a></li>
				</ul>
			</li>
			<li><a href="#">Sex Shop</a></li>
			<li><a href="avaliacao.php">Avaliação</a></li>
			
		</ul>
	</nav>
	
	<!-- Seção -->
	<section id="contato">
		<div id="formulario">
			<h1>Envie uma mensagem com a data que você deseja fazer uma avaliação, e assim que possível retornaremos o seu contato</h1>
			
			<?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "contato@debespacomulher.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "contato.site@debespacomulher.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato formmail"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-Mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
?>
			<form name="contato" action="?envia=sim" method="post">
				<input name="nome" type="text" class="form-control"  type="text" placeholder="Nome" >

				<input name="emailVisitante" name="email"  type="text" class="form-control" placeholder="Email" >


				<input name="telefone" type="text" size="12" maxlength="14" placeholder="(xx) XXXX-XXXX">
					
				<!-- a linha abaixo equivale ao "text" criando uma grande area de texto com "rolagem" -->
				<textarea name="mensagem" placeholder="mensagem"></textarea>


				<input type="submit" name="BTEnvia" value="Enviar"> 
	  <input type="reset" name="BTApaga" value="Apagar"><!-- return recebe um valor da função, se falso não executa a ação -->
			</form>

			

		</div>
	</section>	
	<!-- Rodapé -->
	<footer>
		<div class="creditos"><p>©2017 - D&B Espaço Mulher</p></div>
		<div class="endereco"><p>Rua: Barros penteado 471 Telefone:(11) 98586-1705</p></div>
	</footer>
</div><!-- fim div principal -->
<!-- Melhor lugar para "chamar" os scripts -->

<!-- script jQuery para anular o click no menu em projetos -->
<script type="text/javascript" src="scripts/removeclick.js"></script>
<!-- script jQuery para anular o click no menu em projetos -->
<script type="text/javascript" src="scripts/menuresponsivo.js"></script>
<!-- script jQuery para fixar o menu -->
<script type="text/javascript" src="scripts/fixamenu.js"></script>	
<!-- script jQuery para criar um slider -->
<script type="text/javascript" src="scripts/slide.js"></script>	
</body>
</html><!-- fim do código -->
