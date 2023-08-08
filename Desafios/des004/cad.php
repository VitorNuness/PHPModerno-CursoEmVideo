<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4: Resultado</title>
    <link rel="stylesheet" href="../src/styles/style.css">
</head>
<body>
<header>
        <nav>
            <a href="../menu/index.html">Voltar ao menu.</a>
        </nav>
    </header>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $carteira = $_GET['carteira'] ? $_GET['carteira'] : 0;
            $carteira_formatada = number_format($carteira, 2, ",", ".");

            date_default_timezone_set('America/Sao_Paulo');
            $hoje = time();
            $ontem = $hoje - (24*3600);
            $data_ontem = date('m-d-Y', $ontem);

            $ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='$data_ontem'&format=json");

            curl_setopt($ch, CURLOPT_HEADER, 0);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $res_curl = curl_exec($ch);

            if(curl_error($ch)) {

                echo curl_error($ch);

            } else {

                $resultado = json_decode($res_curl, true);

                $valores = $resultado["value"][0];

            }

            curl_close($ch);

            $cotacao = $valores["cotacaoCompra"];
            $cotacao_formatada = number_format($cotacao,2,",",".");
            $dolar = $carteira / $cotacao;
            $dolar_formatado = number_format($dolar, 2, ",", ".");
            echo "<p>Seus R\$$carteira_formatada equivalem a <strong>US\$$dolar_formatado</strong>.</p>";
            echo "<p>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong>.</p>";
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>