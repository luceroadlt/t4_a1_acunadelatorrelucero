<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Conversor</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>

<body>

    <?php
function obtenerResultado() {
$cadena = $_POST["caja"];

$suma = 0; 
for($i=0;i<count($cadena);$i++){ 
    if(substr($cadena,$i)=='-'){ 
        $i++; 
        $suma -=(int)(count(substr($cadena,$i))); 
    }else{ 
        if(substr($cadena,$i) =='+'){ 
            $i++; 
            $suma += (int)("" . substr($cadena,$i)); 
        }else{ 
            $suma += $suma += (int)("" . substr($cadena,$i)); 
        } 
    } 
    } 
                 
echo "Resultado= " . $suma;
    } 




?>

        <h3>Operaciones aritmeticas con cadenas</h3>
        <hr>

        <form method="POST">
            <br>
            <label> Ingresa cadena:</label> <input type="text" name="caja">

            <br><br>
            <hr>
            <br>
            <input type="Submit" value="realizar operacion" class="btn btn-primary" onclick="operacion();">

            <script>
                function operacion() {
                    alert("<?php echo obtenerResultado(); ?>");

                }
            </script>

        </form>

        <script src="https://code.jquery.com/jquery-latest.js"></script>

</body>

</html>