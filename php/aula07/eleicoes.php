<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições</title>
    <link rel="stylesheet" href="../../style/template.css">
</head>
<body>
    <header class="cabeca">
        <p>
            Área de testes PHP
        </p>
    </header>
    <main class="container">
        <header class="cabecalho">
            <p>
                Curso de PHP para iniciantes - por Gustavo Guanabara
            </p>
        </header>
        <section>
            <div class="conteudo">
                <h3 style="text-align: center;">
                    Exercício 4
                </h3>
                <code>
                    <?php
                    $ano = date("Y", time());
                    $nas = $_GET["i"];
                    $idade = $ano - $nas;
                    echo"Com $idade anos de idade, torna-se " . (($idade >= 18 && $idade < 65)?"obrigatório":"não obrigatório") . " votar."
                    ?>
                </code>
            </div>
        </section>
    </main>
    <footer class="rodape">
        Siga-em no <a href="https://github.com/Rick222555000" target="_blank">GitHub</a> | Rikelmy Magno de Oliveira.
    </footer>
</body>
</html>