<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    //La clase empleados, tendra definidos 2 atributos, los cuales estara privados
        class Empleado{
            private $nombre;
            private $sueldo;
            
            //En el metodo CargarDatos, es un tipo setter el cual va establer los valores de la clase
            public function CargarDatos($nombre,$sueldo){
                $this->nombre=$nombre;
                $this->sueldo=$sueldo;
            }

            //En el metodo Impuestos, va imprimir el nombre y sueldo de la personas, ademas si debe pagar impuestos o no
            public function Impuestos(){
                
                if($this->sueldo > "3000"){
                    echo "Su nombre: ", $this->nombre,"<br>Debe pagar impuestos <br>Su sueldo: ", $this->sueldo;
                }else{
                    echo "Su nombre: ", $this->nombre, "<br>No debe pagar impuestos <br>Su sueldo: ", $this->sueldo;
                }
            }
        }
    ?>
</body>
</html>