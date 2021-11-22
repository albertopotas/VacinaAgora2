<?php
    session_start();
?>

<?php
		if(isset($_POST["cadastrarFunc"])) {

			$conexao = mysqli_connect('localhost','root','','vacinaagora');

			$nomeFunc=$_POST['nomeFunc'];
			$funcaoFunc=$_POST['funcaoFunc']; 
			$localFunc=$_POST['localFunc']; 
			$loginFunc=$_POST['loginFunc'];
			$senhaFunc=$_POST['senhaFunc'];
			$confsenhaFunc=$_POST['confsenhaFunc'];
			$niveis_acesso_id=$_POST['niveis_acesso_id']; //unir tabela acesso
			
			$sql = "INSERT INTO cadfunc (nomeFunc, funcaoFunc, localFunc, loginFunc, senhaFunc, confsenhaFunc, niveis_acesso_id) 
								VALUES ('$nomeFunc', '$funcaoFunc', '$localFunc', '$loginFunc', '$senhaFunc', '$confsenhaFunc', '$niveis_acesso_id')";

			$result = mysqli_query($conexao, $sql);
			
							$_SESSION['funcaovacina'] = $funcaoFunc; //? tabela id funcoes = recebe codigo funcao
							$_SESSION['localvacina'] = $localFunc; //? tabela id locais = recebe codigo local
							$_SESSION['usuarioNiveisAcessoId'] = $niveis_acesso_id; //? tabela id adm ou att = recebe codigo	
						}
		
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleVacina.css">
	<link rel="shortcut icon" href="../imagem/vacina_CT2.png">
	<title>Area: administrador - Cadastro de funcionarios</title>
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
	<div class="tituloInformacoes ">Cadastro de funcionarios</div>
		
		
		<main class="">
			<form class="formAgenda" name="cadastroFunc" action="" method="POST">
				<fieldset>			
					<label for="nome">Nome:</label>
					<input type="text" name="nomeFunc" size="50" maxlength="50" title="Insira o nome corretamente" 	autofocus>		
	   
					<label for="funçao">Função:</label>
					<select name="funcaoFunc" >
						<option value="Enfermeira" name="Enfermeira">Enfermeira</option>
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

					<fieldset name="cadastro acesso">		
						<label for="login">Login:</label>
						<input type="text" name="loginFunc" size="20" maxlength="20" minlength="3" title="Insira o login 	corretamente">
	   
						<label for="senha">senha:</label>
						<input type="text" name="senhaFunc"size="8" maxlength="8" minlength="8" title="Insira a senha 	corretamente">
	   
						<label for="senhaconfirma">Confirmação de senha:</label>
						<input type="text" name="confsenhaFunc" size="8" maxlength="8" minlength="8" title="Insira 	confirmação a senha corretamente">	

						<label for="">Acesso:</label>
						<select name="niveis_acesso_id" value="local">
							<option value="1" name="Administrador">Administrador </option>
							<option value="2" name="Atendente">Atendente</option>
						</select>		
					</fieldset>
					<fieldset>						
						<button type="submit" name="cadastrarFunc" >Cadastrar</button> 
						<button type="reset" value="Reset"  name="apagarFunc" >Apagar Campos</button> 	
						<button type="submit" name="deletarFunc" >Deletar</button> 	
					</fieldset>	
			</form>	

<div name=tabela>
<div name="local 1">

</div>

</div>


		</main> 
			<br><br>

			<!--roda pé-->
			<footer class="">
     			@AVP - 2021 - Escola técnica Alcina Dantas Feijão
     			<a href="loginSair.php " class="loginSair">Sair</a>
 			</footer>
		
</body>
</html>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>


