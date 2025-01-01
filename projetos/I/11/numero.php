<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#05 | Resultado Final</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php

            $num = $_POST["numero"] ?? 0;

            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ." </strong> informado pelo usuário: </p>";

            $int = (int) $num; 
            $fra = $num - $int;
            
            echo "<ul> <li> A parte inteira do número é <strong>". number_format($int, 0, ",", ".") ."</strong></li>";

            print "<li>A parte fracionária do número é <strong>". number_format($fra, 3, ",", ".") ."</strong></li></ul>";
            ?>
        </p>
        <p>
            <button onclick="javascript:history.go(-1)">
                &#x2b05; Voltar
            </button>
        </p>
    </main>
</body>

</html>