<?php

include "conexao-banco.php";

    /*
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    */

    $id = intval($_POST['id']) ? $_POST['id'] : false;
    $primeironome  = isset($_POST['primeiro_nome']) ? $_POST['primeiro_nome'] : '';
    $sobrenome = isset($_POST['sobre_nome']) ? $_POST['sobre_nome'] : '';
    $cep = intval($_POST['cep']) ? $_POST['cep'] : false;
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $logradouro = isset($_POST['logradouro']) ? $_POST['logradouro'] : '';
    $number = intval($_POST['numero_logradouro']) ? $_POST['numero_logradouro'] : false;
    $bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
    $complemento = isset($_POST['complelmento']) ? $_POST['complemento'] : '';
    $genero  = isset($_POST['genero']) ? $_POST['genero'] : '';
    
    $atualizar=pg_query ("UPDATE tb_pessoas SET nome='$primeironome', sobrenome='$sobrenome', cep='$cep', cidade='$cidade', estado='$estado', logradouro='$logradouro', numero='$number', bairro='$bairro', genero='$genero' WHERE id='$id'");

    pg_close ($conn);

    if($atualizar) {
        $mensagem = "Dados alterados com sucesso";
    } else {
        $mensagem = "Falha ao alterar dados";
    }
   
?>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuario</title>
    <link rel="stylesheet" type="text/css" href="src/css/editar-usuario.css">
</head>
<body>

    <div class="conteudoo">
        
        <div class="mensagem">
            <?php echo $mensagem;?>
            <a class="btn_voltar" href="index.php">Voltar</a>
        </div>
        
</div>

</html>
   