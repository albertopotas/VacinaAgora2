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
	<title>Area Administrador - Painel Informações</title>
</head>

<body>
		<!-- header logo titulo-->
		<header class="header">
        <img class="logo" src="../imagem/vacina_CT2.png">
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
        </div>
    </header>

		<div class="tituloAgendamento">Área Restrita: Administrador</div>
		
		<div class="content">
		
		<?php
		echo "Usuario: ".$_SESSION["nomeFunc"]; // ??? nao aparece o nome
		?>
			<div class="divQuadros">
				<div class="quadroCadastro">
					<p>Funcionarios:</p>
						<a href="cadFuncionarios.php" title="cadastro de atendentes e enfermeiros" class="linkQuadros">Cadastro</a></p> 
						<a href="consultFuncionarios.php" title="cadastro de vacinas/ponto de vacinação" class="linkQuadros">Consulta</a></p>
				</div>
				<div class="quadroCadastro">
					<p>Agendamentos:</p>

						<a href="agendaConsultadm.php" title="consulta de agendados" class="linkQuadros"> Agendados</a> <!--NOME , CPF, DATA, FORMULARIO, EDITAR, FALTA--></p>

						
				</div>

				<div class="quadroCadastro">
					<p>Controles:</p>
						<a href="controlGrupoadm.php" title="(Des)habilitação de grupos e idades" class="linkQuadros"> Grupos / Faixa de Idades</a> <!--DATA, LOCAL, QTD VACINAS, VACINADOS, FALTA--></p>

						
				</div>
			</div>
			
			<!--roda pé-->

			<footer class="">
	@AVP - 2021 - Escola técnica Alcina Dantas Feijão
	<a href="loginSair.php " class="loginSair">Sair</a>
</footer>

		</div>
</body>
</html>