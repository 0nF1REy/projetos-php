<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <main>
        <pre>
            <?php

            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

            session_start();
            $_SESSION["teste"] = "FUNCIONOU!";

            print "<h1>Superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);

            print "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>Superglobal COOKIE</h1>";
            var_dump($_COOKIE);

            print "<h1>Superglobal SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV);

            print "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);

            print "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);

            // foreach (getenv() as $c => $v) {
            //     print "<br> $c -> $v ";
            // }

            ?>
        </pre>
    </main>
</body>

</html>