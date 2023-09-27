<!DOCTYPE html>
<html>
<head>
    <title>Soma de Três Valores</title>
</head>
<body>
    <h1>Soma de Três Valores</h1>
    
    <form method="post">
        Valor 1: <input type="text" name="valor1"><br>
        Valor 2: <input type="text" name="valor2"><br>
        Valor 3: <input type="text" name="valor3"><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        $valor1 = intval($_POST['valor1']);
        $valor2 = intval($_POST['valor2']);
        $valor3 = intval($_POST['valor3']);

        $resultado = $valor1 + $valor2 + $valor3;

        if($valor1 > 10){
            echo '<p style="color: blue;">O resultado da soma é: ' . $resultado . '</p>';
        }
        elseif($valor2 < $valor3){
            echo '<p style="color: green;">O resultado da soma é: ' . $resultado . '</p>';
        }
        elseif($valor3 < $valor1 && $valor3 < $valor2){
            echo '<p style="color: red;">O resultado da soma é: ' . $resultado . '</p>';
        }
        else{
            echo '<p>O resultado da soma é: ' . $resultado . '</p>';
        }
    }
    ?>
</body>
</html>