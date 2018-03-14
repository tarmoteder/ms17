<?php
function main_menu() {
echo '<nav>';
$menu = array ('avasta'=>'Avasta','opeta'=>'Õpeta','kontakt'=>'Meist','login'=>'Login/Registreeri',);
foreach ($menu as $key => $value) {
  echo ' <a href="'.$key.'.php">'.$value.'</a>';
  # code...
}
  echo '</nav>';}

function categorys(){

  echo '<ul>';
  $categorys = array ('tehn'=>'Tehnloogia','kodu'=>'Kodu','ktoo'=>'Käsitöö','food'=>'Toit');
  foreach ($categorys as $key => $value) {
    echo '<li><a href="'.$key.'.php">'.$value.'</a></li>';

}echo '</ul>';}

?>
