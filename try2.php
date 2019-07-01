<!DOCTYPE html>

<body>

	<?php 

		echo "<h3>Types of variables in Php: </h3>";
		echo "<p>Global scope variable:</p> ";

		$x = 15;
		echo "The value of declared to x is 15 <br>";

		function GsTesting1()
		{
			//This will produce an error because we have not use or declare variable in function.
			echo "The value of x inside function GsTesting1 is $x <br>";

		}

		GsTesting1();

		echo "The value of x outside function GsTesting1 is $x <br> ";

		echo "<br>";
		echo "<br>";

		//USe of Local Scope

		echo "<p>Local scope variable:</p>";
		
		function LsTesting1()
		{
			$x = 20 ;
			echo "The value of x intside function LsTesting1 is $x <br>";
		}

		LsTesting1();

		//The value of x outside is 15 because we declare it above on line 10.
		echo "The value of x outside function LsTesting1 is $x <br>";

		echo "<br>";
		echo "<br>";

		//Arrays
		echo "<p>Arrays in Php:</p>";

		$y = 18;
		$z = 12;
		$a = 0;

		echo "Now we use global variable in function <br>";
		echo "The value assign to y is " . $y . "<br>";
		echo "The value assign to z is " . $z . "<br>";
		echo "The value assign to a is " . $a . "<br>";

		function Add()
		{
			echo "The value of a is form by addition of y and z <br>";
			echo "a = y + z = ";
			
			$GLOBALS['a'] = $GLOBALS['y'] + $GLOBALS['z'];
			
			echo $GLOBALS['a'];
		}

		Add();


		echo "<br>";
		echo "<br>";

		echo "Operations using global variables <br>";
		$d = 9;
		$p = 7;

		echo "The value of d is $d <br>";
		echo "The value of p is $p <br>";

		function Add1() 
		{	
			global $d , $p;
			$a =  $d + $p ;
			echo " a = d + p = $a";
		}

		Add1();


		echo "<br>";
		echo "<br>";

		//Arrays
		echo "<p>Subtraction using Arrays in Php:</p>";


		echo "Now we use global variable in function <br>";
		echo "The value assign to y is " . $y . "<br>";
		echo "The value assign to z is " . $z . "<br>";
		echo "The value assign to a is " . $a . "<br>";

		function Subtraction()
		{
			echo "The value of a is form by addition of y and z <br>";
			echo "a = y - z = ";
			
			$GLOBALS['a'] = $GLOBALS['y'] - $GLOBALS['z'];
			
			echo $GLOBALS['a'];
		}

		Subtraction();

		echo "<br>";
		echo "<br>";

		//using of  static variable

		function myTest() 
		{
			static $x = 0;
			echo "The value assign to x is ". $x . "<br>";
			$x++;
			
		}

		myTest();
		myTest();
		myTest();






		
	?>


	
</body>
</html>