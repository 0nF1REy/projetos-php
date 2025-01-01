<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $real = $_REQUEST["real"] ?? 0;
            $cotacao = 6.09;
            $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>";
            ?>
        </p>
        <strong>Cotação fixa de R$6,09</strong> informada diretamente no código.
        <p>
            <button onclick="javascript:history.go(-1)">
                &#x2b05; Voltar
            </button>
        </p>
    </main>
</body>

</html>