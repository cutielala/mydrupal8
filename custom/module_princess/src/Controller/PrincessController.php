<?php

namespace Drupal\module_princess\Controller;


use Drupal\core\Controller\ControllerBase;


class PrincessController {
	
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


     $thePricess = '';
	 foreach($princess as $p){
	     $thePricess .= '<li>' .$p['name']. '</li>';
	 
	 }		 
     return [
	    '#type' => 'markup',
		'#markup' => '<ol>'.$thePricess.'</ol>',
	 
	 ];
}
}


?>