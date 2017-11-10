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
function obtenerBinario() {
$num = $_POST["cajaBinario"];

echo "Binario: " . decbin($num);


}
function obtenerOctal() {
    
    $num = decoct($_POST["cajaBinario"]);
   echo"Octal: " . $num;

}
function obtenerHexadecimal() {

     $num = dechex($_POST["cajaBinario"]);
    echo "Hexadecimal: " . $num;
    
}



?>

        <h3>Obtener binario, octal y hexadecimal</h3>
        <hr>

        <form method="POST">
            <br>
            <label> Ingresa decimal:</label> <input type="text" id="cajaBinario" name="cajaBinario">

            <br><br>
            <hr>
            <br>
            <input type="Submit" value="Obtener Binario" class="btn btn-primary" onclick="binario();">

            <script>
                function binario() {
                    alert("<?php echo obtenerBinario(); ?>");

                }
            </script>


            <input type="Submit" value="Obtener Octal" class="btn btn-primary" onclick="octal();">
            <script>
                function octal() {
                    alert("<?php echo obtenerOctal(); ?>");

                }
            </script>


            <input type="Submit" value="Obtener Hexadecimal" class="btn btn-primary" onclick="hexadecimal();">

            <script>
                function hexadecimal() {
                    alert("<?php echo obtenerHexadecimal(); ?>");

                }
            </script>

        </form>

        <script src="https://code.jquery.com/jquery-latest.js"></script>

</body>

</html>