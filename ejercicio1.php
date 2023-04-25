<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
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
        <form method="post" action="ejercicio1.php">
            <div class="form-group">
                <label for="importetotal">Importe Total Vendido:</label>
                <input type="number" class="form-control" id="importetotal" name="importetotal" required>
            </div>
            <div class="form-group">
                <label for="niños">Hijos en Edad Escolar:</label>
                <input type="number" class="form-control" id="niños" name="niños" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Datos del formulario
            $importeTotalVendido = $_POST['importetotal'];
            $numHijosEscolar = $_POST['niños'];

            if ($importeTotalVendido>=0 && $numHijosEscolar>=0) {
                // Variables
                $sueldoBasico = 600;
                $bonificacionPorHijo = 50;
                $comisionPorcentaje = 7.5;
                $descuentoPorcentaje = 11;
                
                // Bonificación
                $bonificacion = $numHijosEscolar * $bonificacionPorHijo;
                
                // Comisión
                $comision = $importeTotalVendido * ($comisionPorcentaje / 100);
                
                // Sueldo bruto
                $sueldoBruto = $sueldoBasico + $comision + $bonificacion;
                
                // Descuento
                $descuento = $sueldoBruto * ($descuentoPorcentaje / 100);
                
                // Sueldo neto
                $sueldoNeto = $sueldoBruto - $descuento;

                // Resultados
                echo '<div class="mt-4">';
                echo '<h3>RESULTADOS:</h3>';
                echo '<ul>';
                echo '<li>Bonificación: S/ '.$bonificacion.'</li>';
                echo '<li>Sueldo Bruto: S/ '.$sueldoBruto.'</li>';
                echo '<li>Descuento: S/ '.$descuento.'</li>';
                echo '<li>Sueldo Neto: S/ '.$sueldoNeto.'</li>';
                echo '</ul>';
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