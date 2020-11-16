<html>
<head>
<title>Deletando Usuário</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso ">
</head>
<body>
    
    <?
        
        include "conexao-banco.php";
        
        $id=$_GET['id'];
        
        $excluir = pg_query($conn,"DELETE FROM tb_pessoas WHERE id=".$id);
        $mensagem = "Usuário excluído com sucesso";
    
    ?>
    <link rel="stylesheet" type="text/css" href="src/css/deletar.css">

    
        
    <div class="conteudo">
        
        <div class="mensagem">
            <?php echo $mensagem;?>
            <a class="btn_voltar" href="index.php">Voltar</a>
        </div>
        
    </div>

    

</body>
</html>