<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .container{
    border: solid 2px hsl(193, 45%, 70%);
    background-color:hsl(31, 100%, 60%);
    border-radius:20px;
    width: 30%;
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <form method="post" action="ejercicio4.php">
        <div class="form-group">
                <label for="precio">Precio del cono:</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Datos del formulario
            $precio = $_POST["precio"];
			$cantidad = $_POST["cantidad"];

            if ($precio>=0 && $cantidad>=0) {

			 //Importe de la compra
            $importeCompra = $precio * $cantidad;
            
            //Primer descuento
            $descuento1 = $importeCompra * 0.05;
            
            //Primer descuento aplicado
            $importeDescuento1 = $importeCompra - $descuento1;
            
            //Segundo descuento
            $descuento2 = $importeDescuento1 * 0.05;
            
            //Ambos descuentos aplicados
            $importeFinal = $importeDescuento1 - $descuento2;

            echo '<div class="alert alert-success mt-3" role="alert">';
            echo '<h2>COMPRA:</h2>';
            echo '<p>Importe de la compra: '.$importeCompra.'</p>';
            echo '<p>Importe del descuento total: '.($descuento1+$descuento2).'</p>';
            echo '<p>Importe a pagar: '.$importeFinal.'</p>';
            echo '</div>';
            }else{
                echo '<div class="alert alert-danger mt-3" role="alert">';
                echo '<h2>Coloque bien los numeros</h2>';
                echo '</div>';
              
                };
        }
        ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>