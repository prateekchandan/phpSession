<?php
/*
	This is a block comment like C/C++
*/
// This is single line comment like C/C++
# In php we can write single comment also like python/perl using a hash(#)


/* echo is used to print a string */
$name = "Prateek";
// Here we are concatinating string using a dot(.) operator
echo '<h1>hello Mr '.$name.'</h1>';

// Variable names start with a $
$a = 0;
// This is a function
function square($val)
{
	// To use a global variable inside a function we need to write this
	global $a;
	$a++;
	return $val*$val;
}
?>
<!-- THis is an HTML Comment , Notice its outside the php block and view page source it will appear-->
<h2>Next heading</h2>


<?php
// This is an associative array. Try doing a var_dump of it to see the datatype of each element
$arr = ['a'=>1,'b'=>'2','c'=>'3'];
 
var_dump($arr);
echo '<br>'; // I am printing a new line via html here

/* foreach is a way of looping over associative arrays in php. Notice that normal arrays are also associative arrays 
 whose indexes are 0 , 1 , .. */
foreach ($arr as $key => $value){
	echo square($value).' <br>';
}
echo 'a = '.$a
?>

<hr> <!-- This will print a horizontal line-->

<b> Equal operator in php == vs === </b><br>
Unlike c/c++ , php uses equality operators differently
<br>
<?php
	$a = 5;
	$b = '5';
	// See how to write if else in php
	if($a == $b)
		echo '5 and \'5\' are same with ==';
	else
		echo '5 and \'5\' are not same with ==';

	echo '<br>';
	if($a === $b)
		echo '5 and \'5\' are same with ===';
	else
		echo '5 and \'5\' are not same with ===';
?>
<br>
So we note that the === operator in php matches the type like the C++ == operator but the == operator just matches the visible value of any variable
<br>
<br>
This is also very similar for the != and !== operator
<hr>
<B>Readings in php</B><br>

<ul>
	<?php
		// See how this php is interleaved within HTML and its running some code to generate html

		$links = [ 'http://www.w3schools.com/php/php_intro.asp',
				   'http://php.net/manual/en/index.php',
				   'https://www.google.co.in/search?q=introduction+to+php+in+one+page&oq=introduction+to+php+in+one+page&aqs=chrome..69i57.4994j0j9&sourceid=chrome&ie=UTF-8#q=learn+php'];
		$texts = ['W3Schools' , 'php.net - Official php documentation' , 'Google - Your Best friend'];
		// Looping over normal arrays
		for ($i=0; $i < sizeof($links); $i++) { 
			echo '<li><a href="'.$links[$i].'">'.$texts[$i].'</a></li>';
		}
	?>
</ul>

<?php 

		// Uncomment the line below to see what you get an output when you try to loop over an array
		foreach ($links as $key => $value) {
			//echo $key.' -> '.$value.'<br>';
		}

		// you can also omit to $key to just loop over array as 

		foreach ($links as $value) {
			//echo $value.'<br>';
		}
 ?>


 <html>
<body>
	<form method="GET">
		Please Enter Country : <input name="Country"/>
		<br>
		<button>Submit</button>
	</form>
</body>
</html>

<?php

$countries = [
['name'=>'India','capital'=>'Delhi'],
['name'=>'Country 1','capital'=>'Capital 1'],
['name'=>'Country 2','capital'=>'Capital 2']
];

if(isset($_GET['Country']))
{
	$country = $_GET['Country'];
	$is_present = 0;
	$capital = '';

	foreach ($countries as $row) {
		if($row['name']==$country){
			$capital = $row['capital'];
			$is_present = 1;
			break;
		}
	}

	if($is_present == 0)
		echo "The country is not present";
	else
		echo "Country : ".$country." , Capital : ".$capital;
}



if(isset($_COOKIE['currency'])){
	echo "Your currency is ".$_COOKIE['currency'];
}
else{
	echo "Your currency is not set. We are setting it to INR";
	setcookie("currency","INR",time()+3600);

}

session_start();

if(isset($_SESSION['currency'])){
	echo "Your currency is ".$_SESSION['currency'];
}
else{
	echo "Your currency is not set. We are setting it to INR";
	$_SESSION['currency'] = "INR";
}

$conn = mysqli_connect("127.0.0.1","guest","password","phpsession") or die("Database Connection Error");

$email = "prateekchandan5545@gmail.com";
$password = "12345";


$query = "SELECT * from `user` where email = '".$email."' && password = '".$password."'";


$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 0){
	echo "User Not found";
}else{
	$user = mysqli_fetch_assoc($result);
	print_r($user);
}