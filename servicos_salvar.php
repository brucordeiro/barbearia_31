<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="" method="post">
            <div id="body">
            <?php 
                //PASSO 1: Incluir as definições de acesso a dados
                include "conexao_bd.php";
                //PASSO 2:Capturar os valores digitados
                $descricao = $_POST["txtDescricao"];
                $preco = $_POST["txtPreco"];
                //PASSO 3: Montar o comando SQL para inserir 
                $sql = "INSERT INTO servico(descicao,preco) VALUES ('$descricao', '$preco')";
                //PASSO 4:Executar o comando
                if (executarComando($sql))
                {
                    echo "<h1>Servico adicionado com sucesso";
                }
                else
                {
                    echo "<h1>Não foi possivel cadastrar.</h1>";
                }
            ?>
                
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
