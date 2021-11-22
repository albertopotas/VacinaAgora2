<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleVacina.css">
	<link rel="shortcut icon" href="../imagem/vacina_CT2.png">
	<title>Área Restrita: Atendimento - Painel Informações</title>
</head>

<body>
		<!-- header logo titulo-->
	
		<header class="header">
        <img class="logo" src="../imagem/vacina_CT2.png">
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
            <div id="tituloCidade">São caetano do Sul</div>
        </div>
    </header>


		<div class="tituloAgendamento">	Área Restrita: Atendente</div>
		
		<div class="content">
		<?php
		echo "Usuario: ".$_SESSION["nomeFunc"]; // ??? nao aparece o nome
		?>

			<div class="divQuadros">
				<div class="quadroCadastro">
					<p>CONSULTA:</p>
						<a href="consultVacatt.php" title="Consulta de quantidade de vacinas e agendados" class="linkQuadros"> Vacina</a> <!--DATA, LOCAL, 
						QTD VACINAS, VACINADOS, FALTA--></p>
						<a href="agendaConsultadm.php" title="Consulta de cadastro de agendados" class="linkQuadros"> Agendados</a> <!--NOME , CPF, DATA, 
						FORMULARIO, EDITAR, FALTA--></p>
				</div>
				
			</div>
			<!--roda pé-->


			<footer class=" ">
	@AVP - 2021 - Escola técnica Alcina Dantas Feijão
	<a href="loginSair.php " class="loginSair">Sair</a>
</footer>
		</div>
</body>
</html>