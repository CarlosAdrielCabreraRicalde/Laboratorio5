<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    </style>
</head>
<body>
    <div class="container mt-5">
        <form method="post" action="ejercicio2.php">
        <div class="form-group">
                <label for="precio">Precio gaseosa de 3L:</label>
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
            // Datos del formulario
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];

            if ($precio>=0 && $cantidad>=0) {
                $descuentoSpecial =0.05;
                $descuentoSpecialAdicional =0.07;
                //Aplicamos un 5% de descuento si la gaseosa es de 3L

                $nuevoPrecio = $precio - $precio *$descuentoSpecial;

                // Importe de la compra
                $importeCompra = $nuevoPrecio * $cantidad;

                // Importe del descuento
                $importeDescuento = $nuevoPrecio *$descuentoSpecialAdicional ;

                // Importe a pagar
                $importePagar = $importeCompra - $importeDescuento;

                // Obsequio de caramelos
                $caramelos = $cantidad * 2;
                // Resultados
                echo '<div class="alert alert-success mt-3" role="alert">';
                echo '<h2>COMPRA:</h2>';
                echo '<p>Compró: '.$cantidad.' gaseosas de '.$litros.' litros.</p>';
                echo '<p>Nuevo precio: '.$nuevoPrecio.'</p>';
                echo '<p>Importe de Compra: '.$importeCompra.'</p>';
                echo '<p>Importe Descuento: '.$importeDescuento.'</p>';
                echo '<p>Importe a Pagar: '.$importePagar.'</p>';
                echo '<p>Recibira '.$caramelos.' caramelos de regalo.</p>';
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