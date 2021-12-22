<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores em PHP</title>
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
                Forma com vareável
            </h1>
            <code>
                <?php
                    $n1 = 3;
                    $n2 = 2;
                    $sum = $n1 + $n2;
                    $sub = $n1 - $n2;
                    $mul = $n1 * $n2;
                    $div = $n1 / $n2;
                    $mod = $n1 % $n2;
                    $med = ($n1 + $n2)/ 2;
                    echo "A soma de $n1 e $n2 é igual a $sum<br>";
                    echo "A subtração de $n1 e $n2 é igual a $sub<br>";
                    echo "A multiplicação de $n1 e $n2 é igual a $mul<br>";
                    echo "A divisão entre $n1 e $n2 é igual a $div<br>";
                    echo "O módulo de $n1 e $n2 é de $mod <br>";
                    echo "A média entre $n1 e $n2 é $med";
                ?>
            </code>
        </div>

        <div class="conteudo">
            <h3>
                Forma sem vareável
            </h3>
            <code>
                <?php
                    $n1 = 3;
                    $n2 = 2;
                    $sum = $n1 + $n2;
                    $sub = $n1 - $n2;
                    $mul = $n1 * $n2;
                    $div = $n1 / $n2;
                    $mod = $n1 % $n2;
                    echo "A soma de $n1 e $n2 é igual a " . ($n1 + $n2);
                    echo "<br>A subtração de $n1 e $n2 é igual a "  . ($n1 - $n2);
                    echo "<br>A multiplicação de $n1 e $n2 é igual a " . ($n1 * $n2);
                    echo "<br>A divisão entre $n1 e $n2 é igual a " . ($n1 / $n2);
                    echo "<br>O módulo de $n1 e $n2 é de " . ($n1 % $n2);
                    echo "<br>A média de $n1 e $n2 é de " . (($n1 + $n2) / 2);
                ?>
            </code>
        </div>

        <div class="conteudo">
            <h3>
                Recebendo variáveis da URL
            </h3>
            <code>
                <?php
                    $a = $_GET["a"];
                    $b = $_GET["b"];
                    echo "A soma de $a e $b é igual a " . ($a + $b);
                    echo "<br>A subtração de $a e $b é igual a "  . ($a - $b);
                    echo "<br>A multiplicação de $a e $b é igual a " . ($a * $b);
                    echo "<br>A divisão entre $a e $b é igual a " . ($a / $b);
                    echo "<br>O módulo de $a e $b é de " . ($a % $b);
                    echo "<br>A média de $a e $b é de " . (($a + $b) / 2);
                ?>
            </code>
        </div>

        <div class="conteudo">
            <h3>
                Funções aritméticas em PHP
            </h3>
            <code>
                <?php
                    $v = $_GET["a"];
                    $f = $_GET["b"];
                    echo "Valor absoluto de $v é " . abs($v);
                    echo "<br>A potencia de $v<sup>$f</sup> é de" . pow($v, $f);
                    echo "<br>A raiz quadrada de $f é " . sqrt($f);
                    echo "<br>$f arredondado é " . round($f);
                    echo "<br>O valor inteiro de $v é " . intval($v);
                    echo "<br>O valor de $v em moeda é de R$" . number_format(abs($v), 2, ",", ".");
                ?>
            </code>
        </div>

    </div>
    <footer class="rodape">
        Siga-me no <a href="https://github.com/Rick222555000" target="_blank">GitHub</a> | Rikelmy Magno de Oliveira.
    </footer>
</body>
</html>