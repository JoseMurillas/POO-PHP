<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Se crea una clase llamada persona donde van a estar definidos 4 atributos con un encapsulamiento privado
        class Persona{
            private $nombre;
            private $apellido;
            private $direccion;
            private $telefono;

            //En el metodo cargarAtributos, es un ejemplo de setter, donde estable los valores de la clase
            public function CargarAtributos($nombre,$apellido,$direccion,$telefono){
                $this->nombre=$nombre;
                $this->apellido=$apellido;
                $this->direccion=$direccion;
                $this->telefono=$telefono;
            }

            //Este metodo se va encargar de imprimir por pantalla lo que se ingreso 
            public function ImprimirAtributos(){
                echo"Su nombre ".$this->nombre."<br> Su apellido ".$this->apellido."<br>Su direccion ".$this->direccion. "<br>Su telefono ".$this->telefono;
            }
            
        }
    ?>
</body>
</html>