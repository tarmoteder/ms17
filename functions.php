<?php
    
function test() {
    echo "Mina olen testfunktsioon<br>";
}

function menyy() {
    $menu_arr = array ('index', 'php', 'functions','view');
    
    foreach ($menu_arr as $item){
        echo '<li><a href="'.$item.'.php">'.$item.'</a></li>';
    }
    
}

?>