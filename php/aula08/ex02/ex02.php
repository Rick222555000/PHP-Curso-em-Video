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
                    if(isset($_POST["nome"], $_POST["nascimento"], $_POST["sexo"])){
                        $nome = $_POST["nome"];
                        $nascimento = $_POST["nascimento"];
                        $sexo = $_POST["sexo"];
                        $idade = date("Y") - $nascimento;
                        echo "O indivíduo $nome do sexo $sexo nasceu no ano de $nascimento, Logo, hoje, tem $idade anos de idade.";
                    }else{
                        header("location: ex02.html");
                        exit();
                    }
                ?>
                <br>
                <a href="ex02.html">&lt;Voltar</a>
            </div>
        </section>
    </main>
    <footer class="rodape">
        Siga-em no <a href="https://github.com/Rick222555000" target="_blank">GitHub</a> | Rikelmy Magno de Oliveira.
    </footer>
</body>
</html>