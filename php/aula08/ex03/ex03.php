<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título</title>
    <link rel="stylesheet" href="../../../style/template.css">
    
    <?php
        if(isset($_POST["tex"], $_POST["tam"], $_POST["cor"])){
            $texto = $_POST["tex"];
            $tamanho = $_POST["tam"];
            $cor = $_POST["cor"];
        }else{
            header("location:ex03.html");
            exit();
        }
    ?>

    <style>
        span.edicao{
            font-size: <?php echo $tamanho;?>;
            color: <?php echo $cor;?>;
        }
    </style>
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
                    echo"<span class='edicao'>$texto</span>";
                ?>
            </div>
            <a href="ex03.html">&lt;Voltar</a>
        </section>
    </main>
    <footer class="rodape">
        Siga-me no <a href="https://github.com/Rick222555000" target="_blank">GitHub</a> | Rikelmy Magno de Oliveira.
    </footer>
</body>
</html>