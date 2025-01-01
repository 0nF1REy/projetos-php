<?php

define('BASE_URL', "./projetos/I/");
$projetos = [];
for ($i = 7; $i <= 19; $i++) {
    $projetos[$i - 6] = BASE_URL . (($i < 10) ? '0' . $i : $i) . "/";
}

if (isset($_GET['projeto'])) {
    $projetoId = filter_input(INPUT_GET, 'projeto', FILTER_VALIDATE_INT);
    if ($projetoId !== false && isset($projetos[$projetoId])) {
        $pastaProjeto = $projetos[$projetoId];
        $indexFile = file_exists($pastaProjeto . 'index.php') ? 'index.php' : 'index.html';
        $redirectUrl = $pastaProjeto . $indexFile;
        header("Location: " . $redirectUrl);
        exit;
    } else {
        echo '
         <!DOCTYPE html>
         <html lang="pt-br">
         <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Projeto Não Encontrado</title>
         </head>
             <body>
                 <div style="text-align: center; padding-top: 50px;">
                     <h1>Projeto Não Encontrado</h1>
                     <p>O projeto solicitado não foi localizado.</p>
                     <a href="index.php" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Voltar para a lista de projetos</a>
                 </div>
             </body>
         </html>';
        exit;
    }
} else {
    include 'index.html';
    exit;
}

?>