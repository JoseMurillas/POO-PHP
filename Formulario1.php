<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Incluimos el documento donde esta la clase persona
    include 'Ejercicio1p.php';

    //Se crea una instancia (Molde) de la clase persona
    $persona = new Persona();

    //Se llama al metodo cargarAtributos, mediante el metodo POST, se almacenara los datos para cada atributo
    $persona->CargarAtributos($_POST["nombre"],$_POST["apellido"],$_POST["direccion"],$_POST["telefono"]);

    //Se llama el metodo imprimirAtributos, donde va imprimir los datos ingresados por el usuario
    $persona->ImprimirAtributos();
    ?>
</body>
</html>