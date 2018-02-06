<!-- Credit to Matt Huntington for basically this entire lesson-->

<!--Actually 9:48 -->

<!--WDI3 9:42 -->
<!--9:40 10 minutes -->

# PHP

## Objectives
*By the end of this lesson, developers will be able to:*

- **Explain** what PHP is, and its role in web development
- **List** the four parts of the MAMP stack
- **Understand** PHP data types and basic syntax

## What is PHP?

**PHP** is a common back-end language.  In fact, it is estimated that of all websites with an identifiable back-end, PHP is the language for over [83% of them](https://w3techs.com/technologies/overview/programming_language/all).  Yes.  That is a real number.  And fun fact: it was 82% last time we checked.

Why is it so common?  Well, there's something to be said for trend-setters like [Facebook using a PHP-derived backend](https://www.quora.com/Why-hasn-t-Facebook-migrated-away-from-PHP) to build their product out, and [providing SDKs](https://developers.facebook.com/docs/reference/php/) (Software Development Kits) for PHP.  But, more importantly, PHP is used in most of the popular CMSes (Content Management Systems).  Specifically, **Wordpress** is based on PHP, and [just under 30% of the Internet's websites](https://w3techs.com/technologies/details/cm-wordpress/all/all) are on Wordpress.  And 100% of those are built with PHP on the back-end.

### A Little History

[PHP](http://php.net/manual/en/history.php.php) is actually arguably older than [Javascript](https://www.w3.org/community/webed/wiki/A_Short_History_of_JavaScript) (it was developed first, but released slightly later).  It has been around since the mid 90s as a way to dynamically render HTML for a web browser, based on variables and the functionality available to a full programming language.

It was developed as a toolset to make building a **P**ersonal **H**ome **P**age easier. After its popularization, the creator claimed that PHP stood for **P**HP: **H**ypertext **P**reprocessor, which is a wonderfully complicated name. Finally its name stopped meaning anything, just like **npm** or [Häagen-Dazs](https://en.wikipedia.org/wiki/H%C3%A4agen-Dazs#Origin_of_brand_name).

The [latest production version of PHP is 7](http://php.net/downloads.php).  [What happened to PHP 6?](https://news.ycombinator.com/item?id=8786919) Long story short, they made a couple big mistakes, and decided skip right over to version 7 - same as Angular did with v3 or ES with v4.

![Pour one out](https://media.giphy.com/media/3xz2BPbIqcqpFDKXsI/giphy.gif)
>Remember: Pour one out for our lost versions


Oh, and PHP has the best mascot ever: the ele**php**ant:

![](elephpant.jpg)

<!--Actually 9:54 -->

## What is MAMP?

**MAMP** is another stack, like **MEAN**.  It is a combination of the:

- **M**ac Operating System
- **A**pache Web Server
- **M**ySQL dialect of SQL
- **P**HP back-end language

>You might also hear of WAMP (AMP on Windows) and LAMP (AMP on Linux)

<!--Actually 9:58-->

<!--9:48 WDI3 -->
<!--9:50 15 minutes -->

## Setup

<!--Kevin's Installer app was broken which sunk a TON of time.  Lesson learned: you can run the installer app manually on terminal, and it works. -->

Follow the directions below to set up the MAMP stack on your computer.

1. Open MAMP
1. Click `Start Servers`
1. Go to <http://localhost:8888/>
1. You should have a directory called `mamp` inside your WDI working directory--make a new directory inside your `mamp` directory called `php-practice`
1. Put a file inside this directory called `index.php`
	- This is where we will be working in this lesson

>**Note:** If you are troubleshooting back-end issues, MAMP error logs are in /Applications/MAMP/logs/
	- `tail -f php_error.log` to see errors

<!--9:52 WDI3 setup already done earlier -->
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

<!--10:04 WDI3 -->

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

<!--10:09 WDI3 -->
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

<!--10:12 WDI3 turning over to devs -->

Now try it yourself.

- Create five numerical variables, using all of the mathematical operators above.
- Increment one of them.
- Multiply one of them by two using an assignment operator.
- Echo all five variables out.

<!--10:18 WDI3-->
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

Use "Format 2" above to display one of three `<h1>` tags, depending on whether a number is greater than zero, less than zero, or equal to zero.

<!--Actually 11:17 WDI2 turning over to devs-->
<!--WDI3 10:29 turning over to devs -->

<!--Actually 11:35 WDI2-->
<!--10:39 WDI3 -->
<!--10:30 10 minutes -->
<!--Just go through syntax, then turn over to students to create an array of three animals, and an associative array with three people and their favorite colors -->

## Arrays

### Indexed Arrays

Standard array functionality

```php
<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[4] = 'Volkswagen'; //can be in indexes that don't yet exist
$cars[] = "AND JET PLANES"; //pushes onto array
echo "I like " . $cars[0] . ", " . $cars[4] . " " . $cars[5] . ".";
echo "<br><br>"; // adds a double line break
echo count($cars);//prints length of array
echo "<br><br>"; // adds a double line break
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

<!--10:45 turning over to devs WDI3 -->

<!--10:50 WDI3 -->
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

<!--Have devs make a for loop to print out their animals and foreach to print out people and favorite colors -->

<!--WDI3 11:01 -->
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

<!--WDI3 11:02-->
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

Want more?  [Here is a full reference for all PHP string methods](https://www.w3schools.com/php/php_ref_string.asp).

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

<!--WDI3 11:07 -->
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

<!-- Look familiar? That's exactly how ES6 classes work-->
<!--11:25 WDI3 -->
<!--Actually 12:16 and only went through without showing most of end stuff-->
