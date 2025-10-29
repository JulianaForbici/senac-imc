<?php
$result = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pesoRaw = $_POST['peso'] ?? '';
    $alturaRaw = $_POST['altura'] ?? '';
    $pesoStr = str_replace(',', '.', trim($pesoRaw));
    $alturaStr = str_replace(',', '.', trim($alturaRaw));
    $peso = is_numeric($pesoStr) ? (float)$pesoStr : null;
    $altura = is_numeric($alturaStr) ? (float)$alturaStr : null;

    if ($peso === null || $altura === null) {
        $error = 'Por favor, informe peso e altura válidos (apenas números).';
    } elseif ($peso <= 0 || $altura <= 0) {
        $error = 'Peso e altura devem ser maiores que zero.';
    } else {
        if ($altura > 3) {
            $altura = $altura / 100;
        }

        $imc = $peso / ($altura * $altura);
        $imcFormatado = number_format($imc, 2, ',', '.');

        if ($imc < 18.5) {
            $class = 'Magreza';
        } elseif ($imc < 25) {
            $class = 'Saudável';
        } elseif ($imc < 30) {
            $class = 'Sobrepeso';
        } else {
            $class = 'Obesidade';
        }
        
        $result = sprintf(
            'IMC: %s — Classificação: %s',
            htmlspecialchars($imcFormatado, ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($class, ENT_QUOTES, 'UTF-8')
        );
    }
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Calculadora de IMC</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; max-width: 600px; margin: auto; }
        label, input { display:block; width:100%; margin-bottom:10px; }
        input[type="text"] { padding:8px; font-size:16px; }
        button { padding:10px 15px; font-size:16px; }
        .error { color: #b00020; margin: 10px 0; }
        .result { color: #006400; margin: 10px 0; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post" novalidate>
        <label>
            Peso (kg):
            <input type="text" name="peso" inputmode="decimal" placeholder="ex.: 68.5" value="<?= isset($_POST['peso']) ? htmlspecialchars($_POST['peso'], ENT_QUOTES, 'UTF-8') : '' ?>">
        </label>
        <label>
            Altura (m ou cm):
            <input type="text" name="altura" inputmode="decimal" placeholder="ex.: 1.75 ou 175" value="<?= isset($_POST['altura']) ? htmlspecialchars($_POST['altura'], ENT_QUOTES, 'UTF-8') : '' ?>">
        </label>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php elseif ($result): ?>
        <div class="result"><?= $result ?></div>
    <?php endif; ?>
</body>
</html>
