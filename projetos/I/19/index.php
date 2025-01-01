<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Caixa Eletrônico</title>
    <style>
        section {
            min-width: 50%;
        }

        form p {
            font-size: 0.8em;
        }

        img.nota {
            height: 60px;
            margin-bottom: 10px;
        }

        section ul {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 3fr));
            gap: 30px;
            list-style-type: none;
            align-items: center;
            justify-content: center;
            padding-right: 20px;
            padding-left: 20px;
        }

        section ul li:last-child,
        section ul li:nth-last-child(2) {
            padding-left: 270px;
            display: inline-flex;
        }


        section ul li {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        section,
        section p {
            text-align: center;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
        }

        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            overflow: hidden;
        }

        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body>
    <?php

    $saque = $_REQUEST['saque'] ?? 0;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" required value="<?= $saque ?>">
            <p><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2 e R$1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php

    $resto = $saque;

    // Saque de R$100
    $tot100 = floor($resto / 100);
    $resto  %= 100;

    // Saque de R$50
    $tot50 = floor($resto / 50);
    $resto %= 50;

    // Saque de R$20
    $tot20 = floor($resto / 20);
    $resto %= 20;

    // Saque de R$10
    $tot10 = floor($resto / 10);
    $resto %= 10;

    // Saque de R$5
    $tot5 = floor($resto / 5);
    $resto %= 5;

    // Saque de R$2
    $tot2 = floor($resto / 2);
    $resto %= 2;

    // Saque de R$1
    $tot1 = floor($resto / 1);
    $resto %= 1;

    $saqueFor = number_format($saque, 2, ",", ".");

    ?>
    <section>
        <h2>Saque de R$<?= $saqueFor ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="../assets/img/100-reais.jpg" alt="Nota de 100 reais" class="nota"> <strong>x<?= $tot100 ?></strong></li>
            <li><img src="../assets/img/50-reais.jpg" alt="Nota de 50 reais" class="nota"> <strong>x<?= $tot50 ?></strong></li>
            <li><img src="../assets/img/20-reais.jpg" alt="Nota de 20 reais" class="nota"> <strong>x<?= $tot20 ?></strong></li>
            <li><img src="../assets/img/10-reais.jpg" alt="Nota de 10 reais" class="nota"> <strong>x<?= $tot10 ?></strong></li>
            <li><img src="../assets/img/5-reais.jpg" alt="Nota de 5 reais" class="nota"> <strong>x<?= $tot5 ?></strong></li>
            <li><img src="../assets/img/2-reais.jpg" alt="Nota de 2 reais" class="nota"> <strong>x<?= $tot2 ?></strong></li>
            <li><img src="../assets/img/1-real.jpg" alt="Nota de 1 real" class="nota"> <strong>x<?= $tot1 ?></strong></li>
        </ul>
    </section>
</body>

</html>