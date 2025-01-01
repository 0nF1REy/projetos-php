<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Médias Aritméticas</title>
</head>

<body>
    <?php

    $valorUm = floatval($_GET['valor-1'] ?? 1);
    $valorDois = floatval($_GET['valor-2'] ?? 0);
    $pesoUm = intval($_GET['peso-1'] ?? 1);
    $pesoDois = intval($_GET['peso-2'] ?? 1);

    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor-1">Forneça o 1° Valor</label>
            <input type="number" name="valor-1" id="valor-1" value="<?= $valorUm ?>">
            <label for="peso-1">Forneça o 1° Peso</label>
            <input type="number" name="peso-1" id="peso-1" required min="1" value="<?= $pesoUm ?>">
            <label for="valor-2">Forneça o 2° Valor</label>
            <input type="number" name="valor-2" id="valor-2" value="<?= $valorDois ?>">
            <label for="peso-2">Forneça o 2° Peso</label>
            <input type="number" name="peso-2" id="peso-2" required min="1" value="<?= $pesoDois ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php

        $ma = ($valorUm + $valorDois) / 2;
        $mp = ($valorUm * $pesoUm + $valorDois * $pesoDois) / ($pesoUm + $pesoDois);

        $mafor = number_format($ma, 2, ",", ".");
        $mpfor = number_format($mp, 2, ",", ".");

        print "<p>Analisando os valores $valorUm e $valorDois:</p>
            <ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mafor.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos $pesoUm e $pesoDois é igual a $mpfor.</li></ul>";
        ?>
    </section>
</body>

</html>