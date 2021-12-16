<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título</title>
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
            <h3>
                Exercício 01
            </h3>
            <?php
                $p = $_GET["p"];
                $preco = $p * 0.9;
                echo "O preço de $p, aplicando 10% de desconto é R$ " . number_format($preco, 2, ",", ".");
            ?>
        </div>

        <div class="conteudo">
            <h3>
                Exercício 02
            </h3>
            <?php
                $ano = $_GET["aa"];
                echo "O ano é $ano, o próximo ano será " . (++$ano) . ".";
                echo "Já o anterior era " . ($ano -= 2);
            ?>
        </div>
    </div>
    <footer class="rodape">
        Siga-em no <a href="https://github.com/Rick222555000" target="_blank">GitHub</a> | Rikelmy Magno de Oliveira.
    </footer>
</body>
</html>