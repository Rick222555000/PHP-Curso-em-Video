<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de vareáveis</title>
    <link rel="stylesheet" href="../../style/template.css">
</head>
<body>
    <header class="cabeca">
        <p>
            Área de testes PHP
        </p>
    </header>
    <div class="container">
        <div class="cabecalho">
            <p>
                Curso de PHP para iniciantes - por Gustavo Guanabara
            </p>
        </div>
        <div class="conteudo">
            <?php
                $idade = 18;
                $nome = "Rikelmy";
                echo "$nome têm $idade anos!";
            ?>
        </div>
    </div>
    <footer class="rodape">
        Siga-em no <a href="https://github.com/Rick222555000" target="_blank">GitHub</a> | Rikelmy Magno de Oliveira.
    </footer>
</body>
</html>