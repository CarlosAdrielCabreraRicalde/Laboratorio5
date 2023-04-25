<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="index.css">
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
        <form method="post" action="ejercicio3.php">
        <div class="form-group">
                <label for="tarifa">Tarifa:</label>
                <input type="number" class="form-control" id="tarifa" name="tarifa" required>
            </div>
            <div class="form-group">
                <label for="dias">Dias:</label>
                <input type="number" class="form-control" id="dias" name="dias" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Datos del formulario
            $tarifa = $_POST['tarifa'];
			$dias = $_POST['dias'];
            $porcentajeDescuento=0.15;
            if ($tarifa>=0 && $dias>=0) {
                			// Importe bruto
			$importeBruto = $tarifa * $dias;

			// Descuento del 15%
			$descuento = $importeBruto * $porcentajeDescuento;

			// Importe neto a pagar
			$importeNeto = $importeBruto - $descuento;

			// Cantidad de lapiceros de obsequio
			$lapicerosObsequio = $dias * 3;
            // Resultados
            echo '<div class="alert alert-success mt-3" role="alert">';
            echo '<h2>RESUMEN DE ALQUILER:</h2>';
            echo '<p>Importe bruto: '.$importeBruto.'</p>';
            echo '<p>Descuento: '.$descuento.'</p>';
            echo '<p>Importe neto: '.$importeNeto.'</p>';
            echo '<p>Recibira '.$lapicerosObsequio.' lapiceros de regalo.</p>';
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