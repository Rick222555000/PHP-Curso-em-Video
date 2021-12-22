<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título</title>
    <link rel="stylesheet" href="../../../style/template.css">
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
                <?php
                    $numero = $_POST["valor"];
                    $raiz = number_format(($numero**(1/2)), 2, ",", ".");
                    echo "A raiz quadrada de $numero é $raiz.<br>";
                ?>
                <a href="formulario.html">&lt;Voltar</a>
            </div>
        </section>
    </main>
    <footer class="rodape">
        Siga-me no <a href="https://github.com/Rick222555000" target="_blank">GitHub</a> | Rikelmy Magno de Oliveira.
    </footer>
</body>
</html>