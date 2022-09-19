<?php 
require_once('class/carro.php');

$carro1 = new Carro();

// $carro1->modelo = "Corola";

$carro1->setModelo('Fusca');
$carro1->setMotor(2.5);
$carro1->setAno(1941);

echo $carro1->getModelo();
echo "<br>";
echo $carro1->getMotor();
echo "<br>";
echo $carro1->getAno();

echo "<br><br>";

$carro2 = new Carro();

$carro2->setModelo('Fiat Uno');
$carro2->setMotor(10.5);
$carro2->setAno(2005);

echo "<br><br>";

var_dump($carro2->exibir());
?>

<pre>
<code>
<?php print_r($carro2->exibir()); ?>
</code>
</pre>