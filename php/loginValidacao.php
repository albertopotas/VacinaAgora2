<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    //include_once("loginConexao.php"); caso usar outra pag php    
    
    
    if((isset($_POST['loginFunc'])) && (isset($_POST['senhaFunc']))){ //O campo usuário e senha preenchido entra no if para validar
      
        $conexao= mysqli_connect("localhost","root","","vacinaagora"); //conecatar BDD

        $loginFunc = mysqli_real_escape_string($conexao, $_POST['loginFunc']); //bater login e senha no bdd com form
        $senhaFunc = mysqli_real_escape_string($conexao, $_POST['senhaFunc']);
       // $senhaFunc = md5($senhaFunc); // criptografa senha
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $sql = "SELECT * FROM cadfunc WHERE loginFunc = '$loginFunc'";
        // valida conexao e busca login e senha
        $result = mysqli_query($conexao, $sql);

        $numlinha=mysqli_num_rows($result);
        echo "num de linha".$numlinha."<br><br>";
        
        if ($numlinha<=0) {
            echo "login não cadastrado";
            }else{
        
                while ($linha= mysqli_fetch_array($result)){   
                    if($linha['senhaFunc']=$senhaFunc){

                          //Encontrado um usuario na tabela usuário com os mesmos dados no formulário
                        if(isset($linha)){
                            $_SESSION['loginFunc'] = $linha['loginFunc'];
                            $_SESSION['senhaFunc'] = $linha['senhaFunc'];
                            $_SESSION['nomeFunc'] = $linha['nomeFunc'];
                            $_SESSION['usuarioNiveisAcessoId'] = $linha['niveis_acesso_id']; 
                            //? tabela Id adm ou att = recebe codigo
                }
                
                if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                        header("Location: loginAdm.php");        
                    }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                        header("Location: loginAtt.php");
                    }else{
                        header("Location: loginVacina.php");
                    }
                }
            }
        }
    }
?>