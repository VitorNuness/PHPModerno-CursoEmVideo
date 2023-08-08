<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1: Resultado</title>
    <link rel="stylesheet" href="../src/styles/style.css">
</head>
<body>
<header>
        <nav>
            <a href="../menu/index.html">Voltar ao menu.</a>
        </nav>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_GET["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número encolhido foi <strong>$numero</strong>.</p>";
            echo "<p>O seu antecessor é $antecessor.</p>";
            echo "<p>O seu sucessor é $sucessor.</p>";
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>