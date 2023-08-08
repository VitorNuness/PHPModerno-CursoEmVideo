<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5: Resultado</title>
    <link rel="stylesheet" href="../src/styles/style.css">
</head>
<body>
<header>
        <nav>
            <a href="../menu/index.html">Voltar ao menu.</a>
        </nav>
    </header>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_GET["numero"] ? $_GET["numero"] : 0;
            $numero_formatado = number_format($numero, 3, ",", ".");
            echo "<p>Analisando o número $numero_formatado informado pelo usuário:</p>";
            $inteiro = floor($numero);
            $inteiro_formatado = number_format($inteiro, 0, ",", ".");
            $fracionada = $numero - $inteiro;
            $fracionada_formatada = number_format($fracionada, 3, ",");
            echo "<ul>
            <li>A parte inteira do número é <strong>$inteiro_formatado</strong></li>
            <li>A parte fraconária do número é <strong>$fracionada_formatada</strong></li>
            </ul>";
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>