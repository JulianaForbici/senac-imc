<?php
header("Content-Type: text/html; charset=utf-8");

function classificarIMC($imc)
{
    $faixas_imc = array(
        array("limite_min" => 0.0, "limite_max" => 18.5, "classificacao" => "Magreza"),
        array("limite_min" => 18.5, "limite_max" => 24.9, "classificacao" => "Saudável"),
        array("limite_min" => 25.0, "limite_max" => 29.9, "classificacao" => "Sobrepeso"),
        array("limite_min" => 30.0, "limite_max" => 34.9, "classificacao" => "Obesidade Grau I"),
        array("limite_min" => 35.0, "limite_max" => 39.9, "classificacao" => "Obesidade Grau II"),
        array("limite_min" => 40.0, "limite_max" => INF, "classificacao" => "Obesidade Grau III")
    );

    foreach ($faixas_imc as $faixa) {
        if ($imc >= $faixa["limite_min"] && $imc <= $faixa["limite_max"]) {
            $classificacao = $faixa["classificacao"];
            break;
        }
    }

    $imc_formatado = number_format($imc, 2, ',', '');
    return "Atenção: seu IMC é $imc_formatado e você está classificado como $classificacao.";
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("HTTP/1.1 405 Method Not Allowed");
    die('405 Method not allowed! Only POST requests allowed.');
}

$peso = (float) str_replace(",", ".", trim($_POST['n1'] ?? ''));
$altura = (float) str_replace(",", ".", trim($_POST['n2'] ?? ''));

if ($peso <= 0 || $altura <= 0) {
    $result_message = "Erro: insira valores válidos (peso e altura maiores que zero).";
    header("Location: index.html?message=" . urlencode($result_message));
    exit;
}

$imc = $peso / ($altura ** 2);
$result_message = classificarIMC($imc);
header("Location: index.html?message=" . urlencode($result_message));
exit;
?>