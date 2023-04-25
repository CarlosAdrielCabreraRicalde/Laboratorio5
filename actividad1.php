<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1</title>
</head>
<body>
    <form method="post" action="">
        Ingrese el primer valor: <br> <input type="text" name="valor1"><br>
        Ingrese el segundo valor: <br> <input type="text" name="valor2"><br>
        Resultado: <br>
        <input type="submit" name="Suma" value="Suma">
    </form>
    <?php
    //declaracion de variables
        $numero1=$_POST['valor1'];
        $numero2=$_POST['valor2'];
        $suma=$numero1+$numero2;
        echo "La suma es: ".$suma;
    ?>

</body>
</html>