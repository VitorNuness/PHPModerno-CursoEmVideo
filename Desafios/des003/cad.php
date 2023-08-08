<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3: Resultado</title>
    <link rel="stylesheet" href="../src/styles/style.css">
</head>
<body>
<header>
        <nav>
            <a href="../menu/index.html">Voltar ao menu.</a>
        </nav>
    </header>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $carteira = $_GET['carteira'] ? $_GET['carteira'] : 0;
            $carteira_formatada = number_format($carteira, 2, ",", ".");
            $cotacao =  5.22;
            $cotacao_formatada = number_format($cotacao,2,",",".");
            $dolar = $carteira / $cotacao;
            $dolar_formatado = number_format($dolar, 2, ",", ".");
            echo "<p>Seus R\$$carteira_formatada equivalem a <strong>US\$$dolar_formatado</strong>.</p>";
            echo "<p><strong>*Cotação fixa de R\$$cotacao_formatada</strong> informada diretamente no código.</p>";
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>