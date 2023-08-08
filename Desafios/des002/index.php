<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="../src/styles/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="../menu/index.html">Voltar ao menu.</a>
        </nav>
    </header>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $numero = mt_rand(0, 100);

            echo "<p>O valor gerado foi <strong>$numero</strong>." 
        ?>
        <form action="cad.php" method="get">
            <input type="button" value="Gerar número" onclick="location.reload()">
        </form>
    </main>
</body>
</html>