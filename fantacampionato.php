<?php
/*
Plugin Name: fantacampionato
Plugin URI: torneo.fantacampionatoonline.com/
Description: Plugin per la creazione, sul tuo sito internet wordpress, di un torneo di fantacalcio Installazione : 1) Fare clic sul link "Attiva" a sinistra di questa descrizione 2) Inserire nella pagina desiderata il tag : [fantacampionato]
Author: Diego
Version: 1.0
Author URI: www.fantacampionatoonline.com
*/

function diego_helloword()
{
  include(get_bloginfo('url')."/wp-content/plugins/fantacampionatoonline/reg.txt");
  $file=fopen(get_bloginfo('url')."/wp-content/plugins/fantacampionatoonline/reg.txt", "r") or exit("Impossibile aprire il file!");
//Fino a che ha raggiunto la fine fai un output della riga
  $out=fgets($file);
  echo $out. "<br />";
  fclose($file);
 if ($out=="")
 {
    echo '<iframe style="border-width: inherit;z-index=0;" height="1850" width="100%" src="'.get_bloginfo('url').'/wp-content/plugins/fantacampionatoonline/inizio.php" scrolling="no"></iframe>';
  }else{
    echo '<iframe style="border-width: inherit" height="11000" width="100%" src="http://torneo.fantacampionatoonline.com/fantacalcio1.php?torneo='.$torneo.' " scrolling="no"></iframe>';
}


}
 
add_shortcode('fantacampionato', 'diego_helloword');


?>