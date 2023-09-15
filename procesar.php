<?php

class classNumero
{
    public $numero;


    public function __construct($numero)
    {
        $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }

}

$numeroInicial = new classNumero('');
$numeroInicial->setNumero($_POST['numero']);

echo "<h2>Información recibida desde PHP</h2>";
echo "El número inicial recibido es: " . $numeroInicial->getNumero() . "<br/>";

echo "<br>";
echo "<h2> Listados de Números a imprimir <h2>";
for ($i = $numeroInicial->getNumero(); $i <= $numeroInicial->getNumero() + 20; $i = $i + 2) {
    if ($i <> 2 and $i <> 5 and $i <> 9 and $i <> 11) {
        echo $i;
        echo "<br>";
    }
}



?>