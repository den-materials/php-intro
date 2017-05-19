<!-- Credit to Matt Huntington for basically this entire lesson-->

<!--Actually 9:48 -->

<!--9:40 10 minutes -->

# PHP

## Objectives
*By the end of this lesson, developers will be able to:*

- **Explain** what PHP is, and its role in web development
- **List** the four parts of the MAMP stack
- **Understand** PHP data types and basic syntax

## What is PHP?

**PHP** is a common back-end language.  In fact, it is estimated that of all websites with an identifiable back-end, PHP is the language for over [82% of them](https://w3techs.com/technologies/overview/programming_language/all).  Yes.  That is a real number.

Why is it so common?  Well, there's something to be said for trend-setters like [Facebook using PHP](https://www.quora.com/Why-hasn-t-Facebook-migrated-away-from-PHP) to build their product out, and [providing SDKs](https://developers.facebook.com/docs/reference/php/) (Software Development Kits) for PHP.  But, more importantly, PHP is used in most of the popular CMSes (Content Management Systems).  Specifically, Wordpress is based on PHP, and [over 25% of the Internet's websites](https://w3techs.com/technologies/details/cm-wordpress/all/all) are on Wordpress.  And 100% of those are built with PHP on the back-end.

### A Little History

[PHP](http://php.net/manual/en/history.php.php) is actually arguably older than [Javascript](https://www.w3.org/community/webed/wiki/A_Short_History_of_JavaScript) (it was developed first, but released slightly later).  It has been around since the mid 90s as a way to dynamically render HTML for a web browser, based on variables and the functionality available to a full programming language.

It was developed as a toolset to make building a **P**ersonal **H**ome **P**age easier.  Then its name stopped meaning anything, just like **npm**.

The latest production version of PHP is 5, but 7 is in development, if you would like to "push the envelope".  [What happened to PHP 6?](https://news.ycombinator.com/item?id=8786919) Long story short, they made a couple big mistakes, and decided to drop those changes.

Oh, and PHP has the best mascot ever: the ele**php**ant.  Here it is:

![](elephpant.jpg)

<!--Sound familiar?  That's what we did with EJS and Angular.  PHP did it first. -->

<!--Actually 9:54 -->

## What is MAMP?

**MAMP** is another stack, like **MEAN**.  It is a combination of the:

- **M**ac Operating System
- **A**pache Web Server
- **M**ySQL dialect of SQL
- **P**HP back-end language

<!--Actually 9:58-->

<!--9:50 15 minutes -->

## Setup

<!--Kevin's Installer app was broken which sunk a TON of time.  Lesson learned: you can run the installer app manually on terminal, and it works. -->

Follow the directions below to set up the MAMP stack on your computer.

1. Download [MAMP](https://www.mamp.info/en/downloads/)
1. Double click the .pkg file and follow prompts
1. Double click /Applications/MAMP/MAMP
1. Point MAMP to your working directory
	- Click on Preferences
	- Click on Web Server
	- Click the folder icon next to "Document Root" and find a suitable directory to work out of
		- We recommend a folder, inside your working directory, called `mamp`
	- Click OK
1. Click `Start Servers`
1. Go to <http://localhost:8888/>
1. Make a new directory inside `mamp` called `php-practice`
1. Put a file inside this directory called `index.php`
	- This is where we will be working in this lesson

>**Note:** If you are troubleshooting back-end issues, MAMP error logs are in /Applications/MAMP/logs/
	- `tail -f php_error.log` to see errors

<!--10:05 15 minutes -->

## Basics

### Tags

Because this is all run on top of Apache, the initial assumption is that we're serving static HTML files
- We need `<?php ?>` tags to show that we're writing PHP
- Think of this as if Apache/PHP is our `server.js` and we're just writing EJS

Instead of `<%= %>` you have `<?= ?>` or `<?php echo ?>`

Instead of `<% %>` you have `<?php ?>`

<!--Demo this whole thing with devs at half-mast-->

### Comments

```php
// single line comment
```
```php
/*
multi
line
comment
*/
```

<!--Remind you of something?  -->

### Declaring/Assigning variables

Use a $ before a variable name to tell php it is a variable.  Assignment is standard.

```php
<?php
	$my_first_var; //declare
	$my_first_var = 2; //assignment
	$my_second_var = 3; //declare and assign
?>
```

### Data Types

```php
<?php
$x = "my string";
var_dump($x);
?>
```
```php
<?php
$x = 5985;
var_dump($x);
?>
```
```php
<?php
$x = 10.365;
var_dump($x);
?>
```

<!-- Woah, everything isn't just a number?-->

```php
<?php
$x = true;
var_dump($x);
?>
```
```php
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
```
```php
<?php
$x = null;
var_dump($x);
?>
```

<!--End demo -->

### String Operators

Use a `.` or `.=` to combine strings.

```php
<?php
	$first_part = "first part";
	$second_part = "second part";
	$concatenation = $first_part . " " . $second_part; //combine strings
	$concatenation .= ".  Appended value"; //append strings
	echo $concatenation;
?>
```

Now try it yourself!

<!-- Ask students to concatenate two strings with . and add a third one with .=, echo out the result. -->

<!--Start demo again -->

### Arithmetic Operators

```php
<?php
	1 + 1; //2
	2 - 1; //1
	3 * 2; //6
	12 / 3; //4
	5 % 2; //1 modulus
	2 ** 3 //8 exponents
?>
```


### Increment/Decrement Operators

```php
<?php
	$x++; //increment by 1;
	$x--; //decrement by 1;
?>
```

<!-- End demo -->

### Assignment Operators

```php
<?php
	$my_var = 1;
	$my_var += 1; //$my_var = $my_var + 1;
	$my_var -= 1; //$my_var = $my_var - 1;
	$my_var *= 2; //$my_var = $my_var * 2;
	$my_var /= 2; //$my_var = $my_var / 2;
?>
```

Now try it yourself.

- Create five numerical variables, using all of the mathematical operators above.
- Increment one of them.
- Multiply one of them by two using an assignment operator.
- Echo all five variables out.

<!--10:20 10 minutes -->
<!--Go quickly through, and then turn over to students for most of time -->

## Conditionals

### Formats

Format 1:

```php
<?php
	if(condition){
	}
	elseif(condition2){
	}
	else{
	}
?>
```

<!--Remind you of something?  No space between else and if, that's about it. -->

Format 2:

```php
<?php if(condition): ?>
<?php elseif(condition2): ?>
<?php else: ?>
<?php endif; ?>
```

### Comparison Operators

```php
<?php
	$x == $y; //equal
	$x === $y; //identical
	$x != $y; //not equal
	$x !== $y; //not identical
?>
```

Arithmetic:

```php
<?php
	$x < $y; //less than
	$x > $y; //greater than
	$x <= $y; //less than or equal to
	$x >= $y; //greater than or equal to
?>
```

### Logical Operators

```php
<?php
	true && false //AND operator
	true || false //OR operator
?>
```

### Independent Practice

<!--Display how you can use an if conditional and an h1 tag after it-->

Use "Format 2" above to display one of three `<h1>` tags, depending on whether a number is greater than or equal to zero, less than zero, or none of the above.

<!--Actually 11:17 -->

<!--Actually 11:35 -->
<!--10:30 10 minutes -->
<!--Just go through syntax, then turn over to students to create an array of three animals, and an associate array with three people and their favorite colors -->

## Arrays

### Indexed Arrays

Standard array functionality

```php
<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[4] = 'asdf'; //can be in indexes that don't yet exist
$cars[] = "added to end"; //pushes onto array
echo "I like " . $cars[0] . ", " . $cars[4] . " and " . $cars[5] . ".";
echo count($cars); //prints length of array
print_r($cars); //prints contents of array in nicer format than var_dump
?>
```

### Associative Arrays (hashes)

These are very similar to Javascript objects

```php
<?php
	$age = array("Peter" => 35, "Ben" => 37, "Joe" => "43"); //declare
	$age = array("Bob"=> 105); //add at a new position
	echo "Bob is " . $age['Bob'] . " years old.";
?>
```

<!--10:40 10 minutes -->

## Loops

### While

```php
<?php
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>
```
```php
<?php $x = 1;?>
<?php while($x <= 5): ?>
	<li><?= $x ?></li>
	<?php $x++ ?>
<?php endwhile; ?>
```

### For

```php
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>
```
```php
<?php for ($x = 0; $x <= 10; $x++): ?>
    <li>The number is: <?= $x ?></li>
<?php endfor; ?>
```

### Foreach

```php
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $key => $value) {
    echo $key . ": $value <br>";
}
?>
```
```php
<?php $colors = array("red", "green", "blue", "yellow"); ?>
<?php foreach ($colors as $key => $value): ?>
	<?= $key ?>: <?=$value?> <br>
<?php endforeach; ?>
```

This works for associative arrays too:

```php
<?php
$ages = array("Peter" => 35, "Ben" => 37, "Joe" => "43");

foreach ($ages as $key => $value) {
    echo $key . ": $value <br>";
}
?>
```
```php
<?php $ages = array("Peter" => 35, "Ben" => 37, "Joe" => "43"); ?>
<?php foreach ($ages as $key => $value): ?>
	<?= $key ?>: <?=$value?> <br>
<?php endforeach ?>
```

<!--Actually through syntax at 11:46, but still haven't had devs go through exercises -->

<!--10:50 5 minutes -->

## Functions

```php
<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>
```

<!--Look familiar? -->

<!--10:55 10 minutes -->
<!--Can just go through these, maybe demo one -->

## Convenience Methods

### Strings

Count a string's length

```php
<?php
echo strlen("Hello world!"); // outputs 12
?>
```

Count number of words in a string

```php
<?php
echo str_word_count("Hello world!"); // outputs 2
?>
```

Reverse a string

```php
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
```

Find a sub string in a string

```php
<?php
echo strpos("Hello world world!", "world"); // outputs 6
//search from the right
echo strrpos("Hello world world!", "world"); // outputs 12
?>
```

Replace text within a string

```php
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
```

Get a substring based on character index

```php
<?php
//second param is index (0 based, like an array)
echo substr("Hello world", 3); // outputs 'lo world'
//third param is length of string
echo substr("Hello world", 3, 4); // outputs 'lo w'
?>
```

### Sorting Arrays

Various functions for sorting arrays.  Can be done arithmetically or alphabetically, depending on content

- sort() - sort arrays in ascending order
- rsort() - sort arrays in descending order
- asort() - sort associative arrays in ascending order, according to the value
- ksort() - sort associative arrays in ascending order, according to the key
- arsort() - sort associative arrays in descending order, according to the value
- krsort() - sort associative arrays in descending order, according to the key

These functions affect the actual array they are called on.

```php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars); //BMW, Toyota, Volvo
```

<!--11:05 15 minutes -->

## Classes and Objects

### Public Members

```php
<?php
class Car {
	public $wheels = 4; // public var can be modified outside class definition
}

$my_car = new Car();

print_r($my_car);
$my_car->wheels = 3;
print_r($my_car);
?>
```

### Constructors

```php
<?php
class Car {
	public $wheels;
	public function __construct(){ // runs at beginning of object creation
		$this->wheels = 4;
	}
}
?>
```

### Protected Members

```php
<?php
class Car {
	protected $wheels = 4; // cannot be accessed outside class definition
	//must define getters...
	public function getWheels(){
		return $this->wheels;
	}
	//and setters...
	public function setWheels($new_wheel_value){
		$this->wheels = $new_wheel_value;
	}
}

$my_car = new Car();
echo $my_car->getWheels();
$my_car->setWheels(5);
echo $my_car->getWheels();
echo $my_car->wheels; //error: cannot access protected property
?>
```
<!--Skipping this for now, maybe I'll teach next time around
### Statics

```php
<?php
class Car {
	protected $wheels = 4;
	public function getWheels(){
		return $this->wheels;
	}
	public function setWheels($new_wheel_value){
		$this->wheels = $new_wheel_value;
	}
}
class CarFactory{
	static protected $cars = array();
	static public function create(){
		$new_car = new Car();
		self::$cars[] = $new_car;
		return $new_car;
	}
	static public function find(){
		return self::$cars;
	}
}
$my_car = CarFactory::create();
$my_car2 = CarFactory::create();
print_r($my_car);
print_r(CarFactory::find());
print_r(CarFactory::$cars); //errors out: protected
?>
```
-->

### Inheritance

```php
<?php
class Car {
	protected $wheels = 4; //accessible by child class, not outside class, though
	private $engine_on = false; //unaccessible by child class
	public function getWheels(){
		return $this->wheels;
	}
	public function setWheels($new_wheel_value){
		$this->wheels = $new_wheel_value;
	}
	public function start(){
		$this->engine_on = true;
	}
}

class Humvee extends Car {
	protected $armour = 10;
	public function takeDamage($damage){
		$this->armour -= $damage;
	}
	public function loseWheel(){
		$this->wheels--; //can access parent $wheels member
	}
	//can extend parent's start function
	public function start(){
		parent::start(); //run parent's start function
		//parent::$engine_on = false; //errors out: cannot access private member of parent
		echo "WELCOME TO THE JUNGLE...";//then do something else
	}
}

$my_humvee = new Humvee();
print_r($my_humvee);
$my_humvee->loseWheel();
print_r($my_humvee);
$my_humvee->takeDamage(6);
print_r($my_humvee);
$my_humvee->start();
print_r($my_humvee);
?>
```

<!-- Look familiar? -->

<!--Actually 12:16 and only went through without showing most of end stuff-->
