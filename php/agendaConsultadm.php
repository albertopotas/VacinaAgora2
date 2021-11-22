<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\styleVacina.css">    
    <link rel="shortcut icon" href="../imagem/vacina_CT2.png">
    <title> Formulario de Agendamento - Vacina Agora </title>
</head>

<body> 
<header class="header">
        <a href="../index.html"><img class="logo" src="../imagem/vacina_CT2.png"></a>
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
        </div>
    </header>


    <main>
    
        <div class="tituloAgendamento">Agendamento digital.</div>
        <div class="tituloInformacoes ">Consulta de Agendamento</div>

        <p >Verifique todas as informações e confirme presença.</p>
        <form name="formConsutlagenda" method="POST" action="" onsubmit="return checkform(this)" class="formAgenda">
            <fieldset>
                <label for="cpf">CPF:</label>
                <input type="text"  name="cpfAgenda" title="Insira seu CPF corretamente: xxx.xxx.xxx-xx"pattern="\d   (3).   \d(3)\.\d(3)-\(2)" maxlength="15" minlength="10" autofocus > 

                <label for="nome">Nome:</label>
                <input type="text"  name="nomeAgenda" title="Insira seu nome completo"  maxlength="50" minlength="5" >

                <label for="Data disponivel:">Data disponivel:</label>
                <input type="date" value="" name="datadispAgenda" title="Insira data para agendamento " maxlength="10"  minlength="10" >
                     
                <!-- Botão pesquisar e confirmar-->
                <input type="submit" value="pesquisar" name="pesquisar">
                <input type="submit" value="confirmar presença" name="confirma">
            </fieldset>    
        </form>
            
    </main>

    <footer >
         @AVP - 2021 - Escola técnica Alcina Dantas Feijão<a href="loginSair.php " class="loginSair">Sair</a>
     </footer>

</body>

</html>

<script>
            //Criação da função checkForm do form acima
            function checkform(form) {
                //Script para Validação de Data de nascimento
                var strData = form.dataNasc.value.replace(/[^0-9]/g, "/");
                var partesData = strData.split("/");
                var data = new Date(partesData[0], partesData[1], partesData[2]);
                if (data > new Date()) {
                    alert("Data de nascimento invalida!");
                    form.dataNascimento.focus();
                    return false;
                }
                return true;
            }
</script>


<?php
if(isset($_POST['pesquisar'])){
    //cpf /nome / datadisp
    $cpfAgenda = $_POST['cpfAgenda'];
    $nomeAgenda = $_POST['nomeAgenda']; 
    $datadispAgenda = $_POST['datadispAgenda'];

    $conexao = mysqli_connect("localhost", "root", "", "vacinaagora") or die ("não tem banco de dados!");

    $sql="SELECT * FROM agendacad2 WHERE cpfAgenda = '$cpfAgenda' or nomeAgenda = '$nomeAgenda' or datadispAgenda = '$datadispAgenda' ";

    $teste=mysqli_query($conexao,$sql);

    echo "<table><tr><td>Nome</td> &nbsp <td>CPF</td> &nbsp <td>Data Nascimento</td> &nbsp <td>E-mail</td> &nbsp <td>Endereço</td> &nbsp <td>Numero</td> &nbsp <td>Apto</td> &nbsp <td>Bairro</td> &nbsp <td>Cidade</td> &nbsp <td>Data Disponivel</td> &nbsp <td>Local</td> <br>";

    while($linha = mysqli_fetch_array($teste)){

        echo "<tr><td>".$linha["nomeAgenda"]."</td><td>".$linha["cpfAgenda"]."</td><td>".$linha["datanascAgenda"]."</td><td>".$linha["emailAgenda"]."</td><td>".$linha["enderecoAgenda"]."</td><td>".$linha["numeroAgenda"]."</td><td>".$linha["aptoAgenda"]."</td><td>".$linha["bairroAgenda"]."</td><td>".$linha["cidadeAgenda"]."</td><td>".$linha["datadispAgenda"]."</td><td>".$linha["localAgenda"]."</td></tr></table>";
    }

}
?>