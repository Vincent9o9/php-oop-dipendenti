<?php
require_once 'Dipendente.php';
require_once 'Amministrativo.php';

$dipendente= new Dipendente('Marco','Rossi','marcorossi@mail.com','raedtrw2564erdte');
$dipendente2=new Dipendente('Luca','Verdi','lucaverdi@mail.com','raedtrw2564erdte');

$dipendente->setEmail('nuovolucaverdi@mail.com');
echo $dipendente->getEmail();

$dipendente3= new Amministrativo('Matteo','Tomato','tomato@mail.com','raedtrw2564eriii','operaio');
var_dump($dipendente,$dipendente2,$dipendente3);

$dipendente->setSpecificheContratto('contratto determinato');
echo $dipendente->getSpecificheContratto(); 
?>
