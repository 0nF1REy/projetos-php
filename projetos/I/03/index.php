<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
    <link rel="stylesheet" href="../styles/styles.css">

</head>

<body>
    <header>
        <h1>Teste de Tipos Primitivos</h1>
    </header>
    <main>
        <?php
        // 0x = Hexadecimal, 0b = Binário, 0 = Octal
        // $num = 010;
        // echo "O valor da variável é $num";

        $var = 300;
        $var2 = 1.2;
        $var3 = "Alan";
        $var4 = true;
        var_dump($var, $var2, $var3, $var4);

        // $num = 3e2; // 3x10(2)
        // echo "O valor é $num.";

        // $num = (int) "950"; // Coerção
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // print "O valor para casado é $casado";

        // $vet = [6, 2.5, "Alan", 9, 3, 5, 9, true];
        // var_dump($vet);

        // class Pessoa {
        //     private string $nome;
        // }
        // $p = new Pessoa;
        // var_dump($p);
        ?>
    </main>
</body>

</html>