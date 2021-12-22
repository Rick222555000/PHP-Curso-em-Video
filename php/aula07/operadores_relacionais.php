<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais em PHP</title>
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
                <h3>
                    Exercício 1
                </h3>
                <code>
                    <?php
                        echo"Escreva 'true' para somar, caso contrário será multiplicação.";
                        $escolha = $_GET["r"];
                        $a = $_GET["a"];
                        $b = $_GET["b"];
                        $resposta = ($escolha == "true")? $a + $b: $a * $b;
                        echo"<br>$resposta.";
                    ?>
                </code>
            </div>

            <div class="conteudo">
                <h3>
                    Exercício 2
                </h3>
                <code>
                    <?php
                        $x = 3;
                        $y = "3";
                        $r = ($x == $y)?"Sim":"Não";
                        echo"A é igual a B? $r.";
                        $r = ($x === $y)?"Sim":"Não";
                        echo"<br>A é idêntico a B? $r.";
                    ?>
                </code>
            </div>

            <div class="conteudo">
                <h3>
                    Exercício 3
                </h3>
                <code>
                    <?php
                        $n1 = 50;
                        $n2 = 90;
                        $m = ($n1 + $n2)/2;
                        echo "A média do aluno foi " . number_format($m,1,",",".") . ", por isso ele está " . (($m >= 60)?"aprovado":"reprovado") . ".";
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