<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuario</title>
    <link rel="stylesheet" type="text/css" href="src/css/formulario.css">
</head>
<body>
    
    <div class="registroformulário"><h1>Formulário de Cadastro</h1></div>

    <div class="conteudo">
        
        <form action="insert-usuario.php" method="POST">

            <div id="nome">

                <h2 class="nome">Nome e Sobrenome</h2>
                <input class="primeironome" type="text" name="primeiro_nome" placeholder="Nome.."required>
                <label class="primeirolabel">Nome</label>
                <input class="sobrenome" type="text" name="sobre_nome" placeholder="Sobrenome.."required>
                <label class="sobrenomelabel">Sobrenome</label>                

            </div>

            <div class="ok">
                <h2 class="nome">Cep</h2>
                <input class="cep" type="number" id="cep" name="cep" placeholder="00000-000" maxlength="8" required>
                <button type="button" id="btn" class="btn btn-success btn-custom mt-4 justify-content-center">ok</button>
            </div>
        
            <h2 class="nome">Cidade</h2>
            <input class="cidade" type="text" id="cidade" name="cidade" placeholder="Cidade.." required>

            <h2 class="nome">Estado</h2>
            <input class="estado" type="text" id="uf" name="estado" placeholder="UF" required>
            
            <h2 class="nome">Logradouro e Número</h2>
            <input class="logradouro" type="text" id="logradouro" name="logradouro" placeholder="Logradouro.." required>
            <label class="logradourolabel">Logradouro</label>
            <input class="number" type="number" id="numero" name="numero_logradouro" placeholder="0000" required>
            <label class="numberlabel">N°</label>

            <h2 class="nome">Bairro</h2>
            <input class="bairro" type="text" id="bairro" name="bairro" placeholder="Bairro.." required>
            
            <h2 class="nome">Complemento</h2>
            <input class="complemento" type="text" placeholder="..." name="complemento">

            <h2 class="nome">Gênero</h2>
            
            <select class="opcoes" name="genero" required>

                <option selected>-- Selecione a Opção --</option>
                <option>Masculino</option>
                <option>Feminino</option>
                <option>Outros..</option>

            </select>

            <div class="enviar">
                <button type="submit">Enviar</button>
            </div>

        </form>


    </div>

    <script type="text/javascript" src="src/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="src/js/main.js"></script>
    
</body>
</html>