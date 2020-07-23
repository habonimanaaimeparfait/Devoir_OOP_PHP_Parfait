!DOCTYPE HTML PUBLIC >
<html>
<?php
namespace Devoir_OOP_PHP_Parfait\Devoir\Automobile\Automobile;
namespace Devoir_OOP_PHP_Parfait\Devoir\index;
namespace Devoir_OOP_PHP_Parfait\Automobile\Moto;
namespace Devoir_OOP_PHP_Parfait\Automobile\Voiture;
namespace Devoir_OOP_PHP_Parfait\Automobile\Tukutuku;
namespace Devoir_OOP_PHP_Parfait\Automobile\Remorque;

include 'Automobile/index';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAGASIN AUTOMOBILE</title>
</head>
<body>

<?php
//Appellation d'une fonction
$automobile=new $automobile;
$automobile->afficherAutomobile();
$voiture=new $voiture;
$voiture->afficherVoiture();
$moto=new moto();
$moto->afficherMoto();
$Tukutuku=new $Tukutuku;
$tukutuku->afficherTukutuku();
$remorque=new $Remorque;
$remorque->afficherTukutuku();

?>    
</body>
</html>
