<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Calculando a sua idade</title>
</head>

<body>
    <?php

    $atual = date("Y");
    $nasc = $_GET['ano-nascimento'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;

    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano-nascimento" id="ano-nasc" min="1900" max="<?= ($atual - 1) ?>" value="<?= $nasc ?>">
            <label for="ano">Em que ano você quer saber sua idade? (atualmente estamos em <strong><?= $atual ?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?= $ano ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php

        $idade = ($ano - $nasc . " ano(s)");

        print "<p>Quem nasceu em $nasc vai ter <strong>$idade</strong> em $ano!";

        ?>
    </section>
</body>

</html>