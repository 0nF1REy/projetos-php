<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
    <style>
        body {
            background-color: #f3f3f3;
            text-align: center;
        }

        header {
            border-bottom: 1px solid black;
        }

        main {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Dados do Servidor</h1>
    </header>
    <main>
        <?php
        phpinfo();
        ?>
    </main>
</body>

</html>