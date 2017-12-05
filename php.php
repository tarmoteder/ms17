<?php

# Kommentaar
// Üherealine kommentaar

/*
Mitme
realine 
kommentaar
*/

require 'functions.php';

menyy();

$hello = 'Tere';
$test = array (5,3,33,14);

// echo $test[3]."<br>"; massiivi konkreetse liikme trükk
// print_r($test);
if (is_array($test)){ //kontrollin kas on massiiv
    
foreach($test as $value){ 
    echo $value."<br>"; // echon massiivi liikmed
}
} else {echo "ei ole massiiv";} // veateade, kui pole tegemist massiiviga

for ($i=0; $i < count($test); $i++){ //for tsükkel massiivi väljatrükiks
    echo $test[$i]."<br>";
}

if ($hello == 'Tere'){
echo "$hello world!<br>"; 
echo '$hello world!<br>'; }

else { echo '$hello on tühi<br>'; }

echo "<strong><em>Mina olen teine lause</strong>";

?>