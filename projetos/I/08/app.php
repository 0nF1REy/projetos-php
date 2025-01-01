<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final  </title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $numero = $_REQUEST["num"];
            $gerador = $numero = rand(min: 1, max: 100);
            $gerador2 = $numero = mt_rand(min: 1, max: 100);
            $gerador3 = $numero = random_int(min: 1, max: 100);
            echo "Números gerados:<p>";
            echo "<strong>$gerador</strong>!</p>";
            echo "<strong>$gerador2</strong>!<p>";
            echo "<strong>$gerador3</strong>!</p>";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">
            &#x1F504 Gerar outro
        </button>
    </main>
</body>

</html>