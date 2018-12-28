<?php

require_once('oops.php');

class user_details extends user
{
	public function __construct()
	{
		parent::__construct();   // calling the parent constructor
		echo "Good Morning"; echo "<br/>";
	}
	public function good()
	{
		echo "Hii";
	}
    public function details()
    {
         
      return user::username('ambu','rajan');
    }

    public function get_name()
    {
    	return parent::$firstname;
    }


}

$name = new user_details();

echo 'Username is '.$name->details(); ?> </br>
<?php

$set = new user();

echo 'name  '.$set->firstname; 

echo $name->get_name();
?>