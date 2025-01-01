<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <header>
        <h1>Exemplo de PHP</h1>
    </header>
    <main>
    <?php
    date_default_timezone_set("America/Sao_Paulo"); // GMT-3
    echo "Hoje é dia " . date("d/M/Y");
    print " e a hora atual é " . date("G:i:s");
    echo ".";
    ?>
    </main>
</body>

</html>