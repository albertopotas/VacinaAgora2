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
	<title>Area: Administrador - Consulta de Funcionarios</title>
</head>

<body>
	<!--  php login session -->
		<!-- header logo titulo-->
	    <header class="header ">
        <img class="logo" src="../imagem/vacina_CT2.png">
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
      
        </div>
    </header>


		<div class="tituloAgendamento">Área Restrita: Administrador</div>
	<div class="tituloInformacoes ">Consulta de Funcionarios</div>
		
		
		<main class="">
			<!-- consultar func tabela pronta e consulta particular NOme/funcao/local-->
			<form class="formAgenda" name="cadastroFunc" action="" method="POST">
				
				<fieldset>			
					<label for="nome">Nome:</label>
					<input type="text" name="nomeFunc" size="50" maxlength="50" title="Insira o nome" 	autofocus>		 
				
					<b>ou</b> 
				
					<label for="funcao">Função:</label>
					<select name="funcaoFunc" >
						
						<option value="Enfermeira" name="Enfermeira">Enfermeira(o)</option>
						<option value="Atendente" name="Atendente">Atendente</option>
						<option value="Supervisor" name="Supervisor">Supervisor</option>							
					</select>

					<label for="local">Local:</label>
					<select name="localFunc" value="local">
							
							<option value="Drive Thru Estadio" name="Drive Thru Estadio Campanella">Drive Thru Estadio Campanella </option>
							<option value="Drive Thru Garagem" name="Drive Thru Garagem Muicipal">Drive Thru Garagem Muicipal</option>
							<option value="Drive Thru Teatro" name="Drive Thru Teatro Paulo Machado de Carvalho">Drive Thru Teatro Paulo Machado de Carvalho</option>
							<option value="USCA" name="USCA">USCA</option>
					</select>	

				</fieldset>		
				<fieldset>						
						<button type="submit" name="consultarFunc" >Consultar</button> 
						<button type="reset"  name="apagarFunc" >Apagar Campo</button> 	
						<button type="submit" name="deletarFunc" >Deletar</button> 	
				</fieldset>	
			</form>	



<?php
	if(isset($_POST['consultarFunc'])){
    	
		$conexao = mysqli_connect("localhost", "root", "", "vacinaagora") or die ("não tem banco de dados!");
		
		//cpf /nome / local	
		$nomeFunc = $_POST['nomeFunc'];
    	$funcaoFunc = $_POST['funcaoFunc']; 
    	$localFunc = $_POST['localFunc'];

	    $sql="SELECT * FROM cadfunc WHERE nomeFunc = '$nomeFunc' or funcaoFunc = '$funcaoFunc' and localFunc = '$localFunc' "; 
		//??? inserir nome local funcao

    	$teste=mysqli_query($conexao,$sql);
		
		echo "<table><tr><td>Nome</td><td>Funcao</td><td>Local</td></tr>";
		
		while($linha = mysqli_fetch_array($teste)){

        	echo "<tr><td>".$linha["nomeFunc"]."</td> &nbsp <td>".$linha["funcaoFunc"]."</td> &nbsp <td>".$linha["localFunc"]."</td></tr></table";
					
    	}
	}
?>
		</main> 
			<br>
			<br>

			<!--roda pé-->

			<footer class="">
     			@AVP - 2021 - Escola técnica Alcina Dantas Feijão
     			<a href="loginSair.php " class="loginSair">Sair</a>
 			</footer>
		
</body>
</html>

	
