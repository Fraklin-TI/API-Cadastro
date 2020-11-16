<html>
<head>
<title>Consultar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso ">
<link rel="stylesheet" type="text/css" href="src/css/index.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script>
        function redirecionar(target) {
            //window.location.href = "formulario-cadastro.php";
            window.location.href = target;
        }
</script>
</head>
<body>

<div class="registroformulário"><h1><b>Cadastrar Usuário</b></h1></div>
<div class="conteudo">
    <form >
    
        <table>

            <thead>
                <tr>
                    <td class="idd" >Id</td>
                    <td class="nomee" >Nome</td>
                    <td class="sobrenomee" >Sobrenome</td>
                    <td class="cepp" >Cep</td>
                    <td class="cidadee" >Cidade</td>
                    <td class="estadoo" >Estado</td>
                    <td class="logra" >Logradouro</td>
                    <td class="numeroo" >Número</td>
                    <td class="bairroo" >Bairro</td>
                    <td class="comp" >Complemento</td>
                    <td class="sexo" >Gênero</td>
                    <td class="option" >Excluir</td>
                    <td class="edit" >Editar</td>

                </tr>
            </thead>

        <?

        include "conexao-banco.php";

        $query = pg_query($conn, "SELECT * FROM tb_pessoas ORDER BY nome ASC");

        while ($consulta = pg_fetch_array($query)){
        
        ?>
            <tr class="tb">
                <td ><?echo $consulta['id'];?></td>
                <td ><?echo $consulta['nome'];?></td>
                <td ><?echo $consulta['sobrenome']?></td>
                <td ><?echo $consulta['cep']?></td>
                <td ><?echo $consulta['cidade']?></td>
                <td ><?echo $consulta['estado']?></td>
                <td ><?echo $consulta['logradouro']?></td>
                <td ><?echo $consulta['numero']?></td>
                <td ><?echo $consulta['bairro']?></td>
                <td ><?echo $consulta['complemento']?></td>
                <td ><?echo $consulta['genero']?></td>
                <td ><a class="cor" href="deletar-usuario.php?id=<?echo $consulta['id']?>"><i class="material-icons icones">delete</i></a></td>
                <td ><a class="cor" href="editar-usuario.php?id=<?echo $consulta['id']?>"><i class="material-icons icones">edit</i></a></td>
            </tr>
        <?

        }

        pg_close ($conn);

        ?>

        </table>
    </form>
    
    <br />

    <button class="ok" onclick="redirecionar('formulario-cadastro.php')">Cadastrar Usuário</button>

</div>

</body>
</html>