<?php 
require_once 'view.php';
/**
* 
*/
class homeUI extends view
{
	
	public function tampilkanHalaman()
	{
		include_once 'pages/home.php';
		$this->end();
	}
}
 ?>
