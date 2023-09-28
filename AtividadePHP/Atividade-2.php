<!DOCTYPE html>
<html>
<head>
    <title>Verificar se um número é divisível por 2</title>
</head>
<body>
    <h1>Verificar se um número é divisível por 2</h1>
    
    <form method="post">
        Número: <input type="text" name="numero"><br>
        <input type="submit" name="verificar" value="Verificar">
    </form>

    <?php
    if(isset($_POST['verificar'])){
        $numero = intval($_POST['numero']);

        if($numero % 2 == 0){
            echo '<p>Valor divisível por 2</p>';
        }
        else{
            echo '<p>O valor não é divisível por 2</p>';
        }
    }
    ?>
</body>
</html>
