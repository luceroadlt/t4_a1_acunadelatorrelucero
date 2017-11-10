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
$num = decbin($_POST["cajaBinario"]);

echo "Binario: " . $num;


}
    function obtenerComplemento() {
$binario = decbin($_POST["cajaBinario"]);

 $num = 0;
 
$bit = 1 << (count($binario)- 1);
for ($i = 0; $i < count($binario); $i++) {
 
  if (substr($binario, $i) == '1') {
   
    $num |= $bit;
  }

  $bit = $bit >> 1;
}
        echo "Complemento A2= ". $binario;
              
}


?>

        <h3>Obtener decimal a binario y complemento A2</h3>
        <hr>

        <form method="POST">
            <br>
            <label> Ingresa decimal:</label> <input type="text" id="cajaBinario" name="cajaBinario">

            <br><br>
            <hr>
            <br>
            <input type="Submit" value="Binario" class="btn btn-primary" onclick="binario();">

            <script>
                function binario() {
                    alert("<?php echo obtenerBinario(); ?>");

                }
            </script>

            <input type="Submit" value="Complemento A2" class="btn btn-primary" onclick="complemento();">

            <script>
                function complemento() {
                    alert("<?php echo obtenerComplemento(); ?>");

                }
            </script>

        </form>

        <script src="https://code.jquery.com/jquery-latest.js"></script>

</body>

</html>