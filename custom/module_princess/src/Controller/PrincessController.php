<?php

namespace Drupal\module_princess\Controller;


use Drupal\Core\Controller\ControllerBase;


class PrincessController extends ControllerBase {
	
     public function princessList(){
		 
		 $princess = [
		 
		  ['name' => 'Snow White'],
		  ['name' => 'Cinderella'],
		  ['name' => 'Aurora'],
		  ['name' => 'Ariel'],
		  ['name' => 'Belle'],
		  ['name' => 'Jasmine'],
		  ['name' => 'Pocahontas'],
		  ['name' => 'Mulan'],
		  ['name' => 'Tiana'],
		  ['name' => 'Rapunzel'],
		  ['name' => 'Merida'],
		  ['name' => 'Moana'],
		  ['name' => 'Raya']
   ];


     		 
     return [
	   '#theme' => 'princess_list',
	   '#items' => $princess,
       '#title' => $this -> t('Our princesses have arrived')
	 ];
}
}


?>