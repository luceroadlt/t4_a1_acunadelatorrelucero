<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Caracteres</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="">

</head>

<body>

    <?php
    function obtenerVocales() {
        
    $palabraIntroducida = $_POST["cajaCadena"];
    $aCont = 0;
    $eCont = 0;
    $iCont = 0;
    $oCont = 0;
    $uCont = 0;
    $otrosCont = 0;


        
    for ($i = 0; $i < strlen($palabraIntroducida) ; $i++) {

        switch (substr($palabraIntroducida, $i )) {

            case "a":
                $aCont++;
                break;

            case "e":
                $eCont++;
                break;

            case "i":
                $iCont++;
                break;

            case "o":
                $oCont++;
                break;

            case "u":
                $uCont++;
                break;

            default:
                $otrosCont++;
                break;

        }

    }

    echo "Vocales: " ;
    echo " a: " . $aCont;
    echo " e: " . $eCont;
    echo " i: " . $iCont; 
    echo " o: " . $oCont;
    echo " u: " . $uCont;


}

function obtenerConsonantes() {

    $cadenaEnAnalisis = $_POST["cajaCadena"];
    

    $bCont = 0;
    $cCont = 0;
    $dCont = 0;
    $fCont = 0;
    $gCont = 0;
    $hCont = 0;
    $jCont = 0;
    $kCont = 0;
    $lCont = 0;
    $mCont = 0;
    $nCont = 0;
    $ñCont = 0;
    $pCont = 0;
    $qCont = 0;
    $rCont = 0;
    $sCont = 0;
    $tCont = 0;
    $vCont = 0;
    $wCont = 0;
    $xCont = 0;
    $yCont = 0;
    $zCont = 0;
    $otrosCont = 0;


    for ($i = 0; $i < strlen($cadenaEnAnalisis); $i++) {

        switch (substr($cadenaEnAnalisis, $i)) {

            case "b":
                $bCont++;
                break;
            case "c":
                $cCont++;
                break;
            case "d":
                $dCont++;
                break;
            case "f":
                $fCont++;
                break;
            case "g":
                $gCont++;
                break;
            case "h":
                $hCont++;
                break;
            case "j":
                $jCont++;
                break;
            case "k":
                $$kCont++;
                break;
            case "l":
                $lCont++;
                break;
            case "m":
                $mCont++;
                break;
            case "n":
                $nCont++;
                break;
            case "ñ":
                $ñCont++;
                break;
            case "p":
                $pCont++;
                break;
            case "q":
                $qCont++;
                break;
            case "r":
                $rCont++;
                break;
            case "s":
                $sCont++;
                break;
            case "t":
                $tCont++;
                break;
            case "v":
                $vCont++;
                break;
            case "w":
                $wCont++;
                break;
            case "x":
                $xCont++;
                break;
            case "y":
                $yCont++;
                break;
            case "z":
                $zCont++;
                break;

            default:
                $otrosCont++;
                break;


        }

    }

 echo "Consonantes: ";
    echo " b: " . $bCont ." c: " . $cCont ." d: " . $dCont . " f: " . $fCont;
    echo " g: " . $gCont . " h: " . $hCont . " j: " . $jCont . " k: " . $kCont;
    echo " l: " . $lCont . " m: " . $mCont . " n: " . $nCont . " ñ: " . $ñCont;
    echo " p: " . $pCont . " q: " . $qCont . " r: " . $rCont . " s: " . $sCont;
    echo " t: " . $tCont . " v: " . $vCont . " w: " . $wCont . " x: " . $xCont;
    echo " y: " . $yCont . " z: " . $zCont;
   
}

//function obtenerLetra() {
//    $palabraIntroducida = $_POST["cajaCadena"].;
//
//    $letra = prompt("Ingresa letra a buscar:");
//    
//    $l = letra.charAt(0);
//    $cont = 0;
//    for (var i = 0; i < palabraIntroducida.length(); i++) {
//        alert("entra");
//        if (palabraIntroducida.charAt(i) == l)
//            cont++;
//        alert("La letra: " + letra + " se repite " + cont + " veces");
//    }
//     
//            alert("Letra no encontrada");
//}

function obtenerLoca() {
    $cadena = $_POST["cajaCadena"];

    $a = str_replace("a", "A",$cadena);
	$b = str_replace("e", "E",$a);
	$c = str_replace("i", "I",$b);
	$d = str_replace("o", "O",$c);
    $e = str_replace("u", "U",$d);
 
    echo "Cadena invertida: ". $e;


}

  ?>




        <h3>Cadena de caracteres</h3>
        <hr>

        <form method="POST">
            <br>
            <label> Ingresa cadena de texto:</label> <input type="text" id="cajaCadena" name="cajaCadena">
            <br><br>
            <hr>
            <h3>Mostrar..</h3>

            <input type="submit" class="btn btn-primary" value="Cantidad de vocales" onclick="Vocales();">

            <script>
                function Vocales() {

                    alert("<?php echo obtenerVocales(); ?>");

                }
            </script>

            <input type="submit" class="btn btn-primary" value="Cantidad de consonantes" onclick="Consonantes();">
            <script>
                function Consonantes() {

                    alert("<?php echo  obtenerConsonantes(); ?>");

                }
            </script>

            <input type="submit" class="btn btn-primary" value="Cantidad de letra" id="btnLetra" name="btnLetra" onclick="Letra();">



            <input type="submit" class="btn btn-primary" value="Cadenita loca" onclick="loca();">
            <script>
                function loca() {

                    alert("<?php echo  obtenerLoca(); ?>");

                }
            </script>

        </form>
        <script src="https://code.jquery.com/jquery-latest.js"></script>

</body>

</html>