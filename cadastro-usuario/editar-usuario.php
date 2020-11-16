<?php

include "conexao-banco.php";

intval($_GET['id']) ? $busca=pg_query("SELECT * FROM tb_pessoas WHERE id='".$_GET['id']."'") : die(pg_error());
 
$dados = pg_fetch_array($busca);

pg_close ($conn);

/*
echo "<pre>";
print_r($dados);
echo "</pre>";
*/

$masculino = "";
$feminino = "";
$outros = "";

if($dados['genero'] === 'Masculino') {
    $masculino = 'selected';
} elseif ($dados['genero'] === 'Feminino') {
    $feminino = 'selected';
} else {
    $outros = 'selected';
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

    <div class="registroformulário"><h1>Atualizar Cadastro</h1></div>

    <div class="conteudo">
        
        <form name="form_editar" id="form_editar" action="editar-usuario-action.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $dados['id']; ?>">
            Nome: <input type="text" class="nome" name="primeiro_nome" value="<?php echo $dados['nome']; ?>" />
            <br />
            Sobrenome: <input type="text" class="sobre-nome" name="sobre_nome" value="<?php echo $dados['sobrenome']; ?>" />
            <br />
            Cep: <input type="number" class="cepe" name="cep" value="<?php echo $dados['cep']; ?>" />
            <br />
            Cidade: <input type="text" class="cidadee" name="cidade" value="<?php echo $dados['cidade']; ?>" />
            <br />
            Estado: <input type="text" class="estadoo" name="estado" value="<?php echo $dados['estado']; ?>" />
            <br />
            Logradouro: <input type="text" class="lagra" name=" logradouro" value="<?php echo $dados['logradouro']; ?>" />
            <br />
            Número: <input type="number" class="numero" name="numero_logradouro" value="<?php echo $dados['numero']; ?>" />
            <br />
            Bairro: <input type="text" class="bairroo" name="bairro" value="<?php echo $dados['bairro']; ?>" />
            <br />
            Complemento: <input type="text" class="comp" name="complemento" value="<?php echo $dados['complemento']; ?>" />
            <br />
            
            Gênero: <select class="opcoes" name="genero" value="<?php echo $dados['genero']; ?>" required>

                        <option>-- Selecione a Opção --</option>
                        <option class="sexom" name="M" <?=$masculino?>>Masculino</option>
                        <option class="sexof" name="F" <?=$feminino?>>Feminino</option>
                        <option class="sexoo" name="O" <?=$outros?>>Outros..</option>
                    
                    </select>   
                    
            <div class="alterar">
                <button class="ok" type="submit" value="Alerta">Alterar</button>
            </div>    
        
        </form>            
    
    </div>    

</body>
</html>