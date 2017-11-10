<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>CURP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="">

</head>

<body>
    <?php
  
    function obtenerCURP() {
    $primerAp = $_POST["cajaPrimerAp"];
    $primerAp = strtoupper(substr($primerAp,0)) ;
    $primerAp2 = strtoupper(substr($primerAp, 1,2)) ; 
    
    $segundoAp = $_POST["cajaSegundoAp"];
    $segundoAp = strtoupper(substr($segundoAp,0));
        
  //Primer carácter alfabético del primer nombre, en caso de José o María se empleara el segundo nombre si lo hubiera
    $nombre = $_POST["cajaNombre"];
    $nombre = strtoupper(substr($nombre,0));
   
//    $aoNac = $_POST["cajaFecha"];
//    $aoNac = substr($aoNac,6);
//    
//    $aoNac2 = $_POST["cajaFecha"];
//    $aoNac2= substr($aoNac2,3,5);    
//    //Dos dígitos del día de nacimiento
//    $aoNac3 = $_POST["cajaFecha"];
//    $aoNac3= substr($aoNac3,2);      

    $sexo = $_POST["cajaSexo"];
    $sexo = strtoupper($sexo); 
    //Dos caracteres alfabeticos correspondiente a la clave de la entidad federativa de nacimiento, ver Catálogo de entidades federativas de nacimiento
    $ent =  $_POST["cajaEstado"];
    $ent = strtoupper(substr($ent,0));  
    //Primer consonante no inicial del primer apellido
    $con = $_POST["cajaPrimerAp"]; 
    $con = strtoupper(substr($con,1));  
    //Primer consonante no inicial del segundo apellido
    $con2 = $_POST["cajaSegundoAp"];
    $con2 = strtoupper(substr($con2,2));  
    //Primer consonante no inicial del nombre
    $con3 = $_POST["cajaNombre"];
    $con3 = strtoupper(substr($con3,2));  
    //Dos dígitos para evitar duplicidades
    

    echo "Su curp es: " . $primerAp  . $primerAp2 .  $segundoAp . $nombre  .
        //$aoNac . $aoNac2 . $aoNac3 . 
        $sexo . $ent . $con . $con2 . $con3 ."00";

}
  
?>



        <h3 name="titulo" value="Obtener CURP">Obtener CURP</h3>
        <script type="text/javascript">
            function ChangeCase(elem) {
                elem.value = elem.value.toUpperCase();
            }
        </script>
        <form method="POST">

            <br><label> Primer Ap: </label><input type="text" id="cajaPrimerAp" name="cajaPrimerAp" style="text-transform: uppercase"> <span>Obligatorio </span>
            <br><label> Segundo Ap: </label><input type="text" id="cajaSegundoAp" name="cajaSegundoAp" style="text-transform: uppercase">
            <br><label> Nombre(s): </label><input type="text" id="cajaNombre" name="cajaNombre" style="text-transform: uppercase">
            <br>
            <label>Sexo: </label><input type="text" id="cajaSexo" name="cajaSexo" placeholder="H/M" style="text-transform: uppercase">


            <br><label> Fecha Nac.</label> <input type="text" maxlength="8" size="5" name="cajaAño" id="cajaFecha" placeholder="dd/mm/aa"><span>Obligatorio </span>

            <br><label>Estado: </label><input type="text" name="cajaEstado" id="cajaEstado" style="text-transform: uppercase"><span>Obligatorio </span>


            <br><br>
            <input type="submit" class="btn btn-primary" value="Obtener CURP" onclick="CURP();">
            <script>
                function CURP() {
                    alert("<?php echo obtenerCURP(); ?>");

                }
            </script>

            <input type="reset" class="btn btn-primary" id="btnObtenerCURP" name="btnObtenerCURP">



        </form>

        <script src="https://code.jquery.com/jquery-latest.js"></script>
</body>

</html>