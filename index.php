<?php

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:
// $users = [
//  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB']
// ];

$users = [
 ['name' => 'Davide',
  'surname' => 'Cariola', 
  'gender' => 'M'],

  ['name' => 'Ignoto',
  'surname' => 'XXX', 
  'gender' => '?'],

  ['name' => 'Carla',
  'surname' => 'Carletta', 
  'gender' => 'F'],

  
];

foreach($users as $user){
    if($user["gender"]==="M"){
        echo("Buongiorno Sig. $user[name] $user[surname] \n");
    }
    elseif($user["gender"]==="F"){
        echo("Buongiorno Sig.ra $user[name] $user[surname] \n");
    }
    else{
        echo ("Buongiorno $user[name]  $user[surname] \n");

    }
}


// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$totalePari = 0;
$contatorePari = 0;


foreach ($numeri as $numero) {
    
    if ($numero % 2 == 0) {
        $totalePari += $numero;        
        $contatorePari++;
    }
}

$media = $totalePari/$contatorePari;
echo($media);


// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

for($i=0; $i<=100; $i++){
    if($i%3===0 && $i%5===0){
        echo("HACKADEMY \n");
    }
    elseif($i%3===0){
        echo("PHP \n");
    }
    elseif($i%5===0){
        echo("JAVASCRIPTPHP \n");
    }
    else{
        echo("$i \n");
    }
}

// ESERCIZIO EXTRA
// Scrivere un programma che converta un voto numerico (v) in un giudizio seguendo questi parametri:
// v < 18: insufficiente
// 18 <= v < 21: sufficiente
// 21 <= v < 24: buono
// 24 <= v < 27: distinto
// 27 <= v <= 29: ottimo
// v = 30: eccellente
// Esempio:
// Input: v = 29
// Output: Ottimo

$v = 29;
$giudizio = '';

if ($v < 18) {
    $giudizio = 'Insufficiente';
} elseif ($v >= 18 && $v < 21) {
    $giudizio = 'Sufficiente';
} elseif ($v >= 21 && $v < 24) {
    $giudizio = 'Buono';
} elseif ($v >= 24 && $v < 27) {
    $giudizio = 'Distinto';
} elseif ($v >= 27 && $v <= 29) {
    $giudizio = 'Ottimo';
} elseif ($v == 30) {
    $giudizio = 'Eccellente';
}

echo "Input: v = $v\n";
echo "Output: $giudizio";

