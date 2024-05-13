<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Incluimos el documento donde esta la clase que vamos a invocar
    include ("Ejercicio2p.php");

    //Se intancia la clase Empleado
    $empleado = new Empleado();

    //Se llama el primer metodo, donde los datos sera ingreados por el usuario y enviados por el metodo POST
    $empleado->CargarDatos($_POST["nombre"], $_POST["sueldo"]);

    //Se llama el metodo impuestos el cual va imprimir el nombre y si debe pagar impuestos o no
    $empleado->Impuestos();
    ?>
</body>
</html>