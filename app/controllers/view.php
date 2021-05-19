<?php

//classe mère des vues
class View {

    //on charge la page selon le nom de la vue
    public function render($page_name, $data) {
		$this->data = $data;

  //  require_once "//".$page_name.".php"; //chemin d'accès au fichier

require_once $_SERVER['DOCUMENT_ROOT'] ."/Foodies/$page_name.php";
//C:\Users\AMG\Desktop\Foodies\tasks.php
    }


}
?>
