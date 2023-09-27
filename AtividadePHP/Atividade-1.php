<!DOCTYPE html>
<html>
<head>
    <title>Soma de Três Valores</title>
</head>
<body>
    <?php
    // Defina os valores das três variáveis
    $valor1 = 15; // Você pode alterar os valores conforme necessário
    $valor2 = 8;
    $valor3 = 12;

    // Calcule a soma dos três valores
    $soma = $valor1 + $valor2 + $valor3;

    // Inicialize uma variável para armazenar a cor do texto
    $corTexto = '';

    // Verifique as condições e defina a cor do texto
    if ($valor1 > 10) {
        $corTexto = 'blue';
    } elseif ($valor2 < $valor3) {
        $corTexto = 'green';
    } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
        $corTexto = 'red';
    }

    // Crie um estilo CSS inline com base na cor selecionada
    $estiloTexto = 'color: ' . $corTexto . ';';

    // Imprima o resultado com a cor apropriada
    echo '<p style="' . $estiloTexto . '">A soma é: ' . $soma . '</p>';
    ?>
</body>
</html>