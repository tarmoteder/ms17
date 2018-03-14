<?php
    
function test() {
    echo "Mina olen testfunktsioon<br>";
}

function menyy() {
    
    $menu_arr = array ('index', 'php','functions','view');
    
    foreach ($menu_arr as $item){
        echo '<li><a href="'.$item.'.php">'.$item.'</a></li>';
    }
    /* Massiivi töötlus kaustades for tsüklit
    echo "<br>".count($menu_arr)."<br>";
    for ($i=0; $i < count($menu_arr); $i++ ){
        echo '<li><a href="'.$menu_arr[$i].'.php">'.$menu_arr[$i].'</a></li>';
        
    } */
    
}

$menu_arr = array ('index', 'php','functions','view');

// sidusmassiiv (associated array)
$assoc_arr = array ('nimi' => 'Tarmo', 'perenimi' => 'Teder', 'synd' => 1974);

echo $menu_arr[0]."<br>";
echo $assoc_arr['nimi']."<br>";

print_r($_SERVER);

?>