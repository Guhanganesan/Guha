<?php
class User
{
    public $name;// class variables, 
	//access modifier "public"(variable can be accessed from outside the class).
    public $age;
    
    public function Describe()// to access something from the object used before the operator. 
    {
        return $this->name . " is " . $this->age . " years old";
		
			
    }
}

// "$this" variable, to access the variables of the class it self.

// arrow operator ( -> ) in C is used to access a member of a struct.

/* Describe() method on the user object, which will return a string of information, 
which we then echo out.
Visibility:

Private members can only be accessed from inside the class itself. 

Protected members can only be accessed from inside the class it self and its child classes. 

Public members can be accessed from anywhere - outside the class, inside the class it self and from child classes.







 */
       
		$user = new User();
		$user->name = "John Doe"; //Give me the name variable on the $user object"
		$user->age = 42;
		echo $user->Describe();
		
?>



<?php
class BankAccount{
}
// create a new bank account object
$account = new BankAccount();
 
var_dump($account);
?>








