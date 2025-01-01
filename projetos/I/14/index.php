<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Raiz Quadrada e Cúbica</title>
</head>
<body>
    <?php
        $numero = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Raiz Quadrada e Cúbica</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Forneça um número</label>
            <input type="number" name="valor" id="valor" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php

        $raizQua = sqrt($numero);
        $raizCub = pow($numero, 1/3);   

        $raizQuaFor = number_format($raizQua, 3, ",", ".");
        $raizCubFor = number_format($raizCub, 3, ",", ".");
        
        print "<p>Analisando o <strong>número $numero</strong>, temos:</p>
        <ul><li>A sua raiz quadrada é <strong>$raizQuaFor</strong></li><li>
        A sua raiz cúbica é <strong>$raizCubFor</strong></li></ul>";

        ?>
    </section>
</body>
</html>