<?php
    session_start();
?>
<?php
    // CADASTRO AGENDAMENTO
    If (isset($_POST['btnagendar'])){
    
        $conexao2=mysqli_connect("localhost","root","","vacinaagora");
    
        $nomeAgenda=$_POST['nomeAgenda'];
        $cpfAgenda=$_POST['cpfAgenda'];
        $datanascAgenda=$_POST['datanascAgenda']; //date
        $emailAgenda=$_POST['emailAgenda'];
        $enderecoAgenda=$_POST['enderecoAgenda'];
        $numeroAgenda=$_POST['numeroAgenda'];
        $aptoAgenda=$_POST['aptoAgenda'];
        $bairroAgenda=$_POST['bairroAgenda'];
        $cidadeAgenda=$_POST['cidadeAgenda'];
        $datadispAgenda=$_POST['datadispAgenda']; //date
        $localAgenda=$_POST['localAgenda']; // local postos select
    
        //inserir campos
        $sql2= "INSERT INTO agendacad2 (nomeAgenda, cpfAgenda, datanascAgenda, emailAgenda, enderecoAgenda, numeroAgenda, aptoAgenda, bairroAgenda, cidadeAgenda, datadispAgenda, localAgenda) 
            VALUES ('$nomeAgenda', '$cpfAgenda', '$datanascAgenda', '$emailAgenda', '$enderecoAgenda', '$numeroAgenda', '$aptoAgenda', '$bairroAgenda', '$cidadeAgenda', '$datadispAgenda', '$localAgenda')";

        $result2 = mysqli_query($conexao2, $sql2);

         echo "Agendado!";
        }

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
<a href="../index.html"><header class="header">
<img class="logo" src="../imagem\vacina_CT2.png" >
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
          
        </div>
    </header></a>

    <div class="tituloAgendamento">Agendamento digital</div>
    <div class="tituloInformacoes ">Cadastro de Agendamento</div>
<main>  
        <form method="POST" action="" class="formAgenda" onsubmit="return checkform(this)">
            <Fieldset name="infoPessoal">
                   
                    <label for="nome">Nome:</label>
                    <input type="text"  name="nomeAgenda" title="Insira seu nome completo"  autofocus>

                    <label for="cpf">CPF:</label>
                    <input type="text"  name="cpfAgenda" title="Insira seu CPF corretamente: xxx.xxx.xxx-xx" pattern="\d(3).\d(3)\.\d(3)-\(2)" maxlength="15" minlength="10"  required> 

                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input type="date"  name="datanascAgenda" title="Insira sua data de nascimento " maxlength="10"  minlength="10" required>

                    <label for="email">E-mail:</label> 
                    <input type="text"  name="emailAgenda" title="Insira seu 
                        e-mail " pattern="(?:[a-z0-9!#$%&'*+/=? ^_`{|}~-]+(?:\.
                        [a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|(?:
                        [\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]| \\
                        [\x01-\x09\x0b\x0c\x0e-\x7f])*" maxlength="50" required >

            </Fieldset >        
            <Fieldset name="infoEndereco">
                    <label for="Endereço:" value="endereco" name="endereco"> Endereço:</label>
                    <input type="text"  name="enderecoAgenda" title="Insira seu endereço " maxlength="50"   minlength="5">
                    
                    <label for="Numero:">Numero:</label>
                    <input type="text"  name="numeroAgenda" title="Insira seu numero de endereço " maxlength="10"   minlength="1">
                    
                    <label for="Apto:"> Apto:</label>
                    <input type="text"  name="aptoAgenda" title="Insira numero seu apartamento " maxlength="10"     minlength="1">
                    
                    <label for="Bairro:">Bairro:</label>
                    <input type="text"  name="bairroAgenda" title="Insira o nome do seu bairro " maxlength="20"     minlength="1">
                    
                    <label for="Cidade:">Cidade:</label>
                    <input type="text"  name="cidadeAgenda" title="Insira sua cidade " maxlength="20" minlength="1">
            </Fieldset>
            <Fieldset name="infoAgendamento">

                    <label for="Data disponivel:">Data disponivel:</label>
                    <input type="date"  name="datadispAgenda" title="Insira data para agendamento " maxlength="10"  minlength="10" required>
                    
                    <label for="Local disponivel:">Local disponivel:</label>
                    <select type="text"  name="localAgenda" title="Insira o local para agendamento " maxlength="10"  minlength="10" required>
                        <option value="1" nome="Drive Trhu estadio Campanella">Drive Trhu estadio Campanella</option>
                        <option value="2" nome="Drive Trhu Garagem Municipal">Drive Trhu Garagem Municipal</option>
                        <option value="3" nome="Drive Thru Teatro Paulo Machado de Carvalho">Drive Thru Teatro Paulo Machado de Carvalho</option>
                        <option value="4"nome="USCA" >USCA</option>
                    </select>
                    <button type="submit" value="btnAgendar" name="btnagendar"> Agendar </button>
                    <button type="reset" value="reset" name="btnreset"> Apagar campos </button>
            </Fieldset>

        </form>

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
   
   </main>
    <footer>
        @AVP - 2021 - Escola técnica Alcina Dantas Feijão
    </footer>   
</body>

</html>


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>

