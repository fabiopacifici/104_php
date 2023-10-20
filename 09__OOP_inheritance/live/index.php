<?php

/* 
Creiamo due classi, una per rappresentare un Utente ed una per l’utente Premium. Aggiungiamo una classe Membership da passare nel costruttore della sottoclasse PremiumUser. 
*/

require __DIR__ . '/Models/User.php';
require __DIR__ . '/Models/PremiumUser.php';
require __DIR__ . '/Models/Membership.php';




$standard = new User('Luca', 'Bianchi');
$standard->setAge(70);
$standard->setDiscount();


$premium = new PremiumUser('Luca', 'Rossi', new Membership('Gold', 99.99, '2023-10-20'));
$premium->setAge(45);
$premium->setDiscount();
var_dump($standard);
var_dump($premium);
