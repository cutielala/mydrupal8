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


     $thePricess = '';
	 foreach($princess as $p){
	     $thePricess .= '<li>' .$p['name']. '</li>';
	 
	 }		 
     return [
	    '#type' => 'markup',
		'#markup' => '<h2>'.$this->t('these are Disney princess').'</h2><br/><ol>'.$thePricess.'</ol>',
	 
	 ];
}
}


?>