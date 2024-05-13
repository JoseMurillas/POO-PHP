<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
<?php 
        class CabeceraPagina{
            private $titulo;
            private $formato;
            private $color;
            private $fuente;

            public function DatoPagina($titulo, $formato, $color, $fuente){
                $this->titulo = $titulo;
                $this->formato = $formato;
                $this->color = $color;
                $this->fuente = $fuente;
            }

            public function FormatoTitulo(){
                if ($this->formato == "centrado") {
                $this->formato = "<h1 style='text-align: center; color: $this->color'>$this->titulo</h1>";
                }elseif ($this->formato == "derecha"){
                $this->formato = "<h1 style='text-align: left; color: $this->color'>$this->titulo</h1>";
                }elseif ($this->formato == "izquierda"){
                $this->formato = "<h1 style='text-align: right; color: $this->color'>$this->titulo</h1>";
                }
            }
            public function FormatoFuente() {
                $fuente_css = '';
                if($this->fuente == "arial") {
                    $fuente_css = "font-family: 'Arimo', sans-serif;";
                } elseif($this->fuente == "arialB") {
                    $fuente_css = "font-family: 'Oswald', sans-serif;";
                } elseif($this->fuente == "impact") {
                    $fuente_css = "font-family: 'Lato', sans-serif;";
                }
                return "<h1 style='$fuente_css'>$this->formato</h1>";
            }
        }
    ?>
</body>
</html>