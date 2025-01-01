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

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $real = $_REQUEST["real"] ?? 0;
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $dolar = ($real / $cotacao);

            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>";

            ?>
        </p>
        Cotação obtida diretamente do site do <a href="https://dadosabertos.bcb.gov.br/" target="_blank"><strong>Banco Central do Brasil</strong></a>
        <p>
            <button onclick="javascript:history.go(-1)">
                &#x2b05; Voltar
            </button>
        </p>
    </main>
</body>

</html>