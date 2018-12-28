<?php
/*----------------------- OOPS ------------*/

class user
{
	public $firstname = 'see';
	public $lastname; 
	private $moblie;
	protected $address;
   public function __construct()  /* constructor function*/
	{
		
		echo "Hi..Hello,"; echo "<br/>";
	}
	public function username($firstname,$lastname)
	{
		return $firstname." ".$lastname;
	}
}


?>