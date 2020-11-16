<html>
<head>
<title>Deletando Usuário</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso ">
<link rel="stylesheet" type="text/css" href="src/css/insert.css">
</head>
<body>

    <?
    
        include "conexao-banco.php";
        
        $id = $_POST['id'];
        $primeironome = $_POST['primeiro_nome'];
        $sobrenome = $_POST['sobre_nome'];
        $cep = intval($_POST['cep']); 
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $logradouro = $_POST['logradouro'];
        $number = intval($_POST['numero_logradouro']);
        $bairro = $_POST['bairro'];
        $complemento = $_POST['complemento'];
        $opcoes = $_POST['genero'];

        $strconsulta2=pg_query($conn, "insert into tb_pessoas (nome,sobrenome,cep,cidade,estado,logradouro,numero,bairro,complemento,genero) values('$primeironome','$sobrenome','$cep','$cidade','$estado','$logradouro','$number','$bairro','$complemento','$opcoes') ");
        
        if($strconsulta2 !== false) {
            $mensagem = "Usuário cadastrado com sucesso";
        } else {
            $mensagem = "Usuário não cadastrado";
        }
        
        pg_close($conn);


    ?>

    
    
    <div class="conteudo">
        
        <div class="mensagem">
            <?php echo $mensagem;?>
            <a class="btn_voltar" href="index.php">Voltar</a>
        </div>
        
    </div>

</body>
</html>