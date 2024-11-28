<?php 
// the code below is to output a string in php
echo "my website";

/* echo "<br>";

var_dump("my website");*/

print /*the word print is to output */ "my website";

$myName = "chioma";

echo "<br>";

var_dump ("my name is $myName");

$yearsOfExperience1 = 5;
$yearsOfExperience2 = "5";
$yearsOfExperience3 = 6;

echo "<br>";
var_dump($yearsOfExperience2);

$isEducated = true;
echo "<br>";
var_dump($isEducated);
echo "<br>";

$height = 6.1;
var_dump($height);

$isMale = true;
echo "<br>";
var_dump($isMale); echo "<br>";

// array
$fullName = array ("oluebube","chioma","nwoke","odanwu");
var_dump ($fullName); echo "<br>";

echo $fullName[1];
 echo "<br>";
echo "my first name is $fullName[0] and my surname is $fullName[2]";

// null
$nothing=null;

echo"<br>";
var_dump($nothing);

// constant
define("pi", 3.142);
echo"<br>";
var_dump(pi);

echo "<br>";

// define("gravityacceleration", 10);
// var_dump(gravityAcceleration);

const gravityAcceleration = 10;

echo "<br>";
var_dump (gravityAcceleration);

// 31/10/2024
// operators 
//arithemetic operators

$X = 10;
$Y = 5;

echo "<br>";
echo $X + $Y;

echo "<br>";
echo $X - $Y;
 
echo "<br>";
echo $X * $Y;

echo "<br>";
echo $X / $Y;

echo "<br>";
echo $X % $Y;

echo "<br>";
echo $X ** $Y;

// Increment and Decrement Operators

// increment operator
echo $X++;
echo "<br>";

echo $X;

// Decrement Operators
 echo "<br>";
$X--;
echo $X;

// Assignment opertators

$a = 100;
$b = 50;

echo "<br>";

// Addition Assignment 
$a += $b;

echo $a;

echo "<br>";
// Substraction Assignment
$a -= $b;
echo $a;

// You can do the following for division, multiplication etc

// Logical operators : eg of a logical operator is AND(&&), OR(||), XOR,NOT(!)

echo "<br>";
// The And (&&) 
if ($a == 100 && $b == 50) {
    echo "we are good to go. ";
   
}

echo"<br>";
// The OR (||) : for the OR to work, it needs one of the condtional statements to be true, to ouput true
if ($a == 100 || $b == 50) {
    echo "we are good to go. ";
   
}

echo "<br>";
// The Xor : for the Xor to work, only one of the conditional statement needs to be true, 
// if the two conditional statements are true, it will output false. or not output.

if ($a == 100 xor $b == 55) {
    echo "we are good to go. ";
    
}

echo "<br>";
// The NOT : the Not needs to be infront of the variable, it returns a true where the variable is not true and 
// it needs the variable to be wraped inside a perentesis.and it can only work with one variable input.
if (!($a == 101) ) {
    echo "we are good to go. ";
    
}

echo "<br>";

// 11/04/2024
// PHP CONDITIONAL STATEMENT
// there are 4 four notable conditional statement in PHP
// namely:
// if statement
// if ... else statement
// if ...elseif statement 
// switch statement

// THE IF statementthe if statement is one of the most important statement in PHP
// Example : using a single IF statement without elseif or else

if (7>3) {
   echo "Have a good day";
}
// Example: 
// --- variable declaration 


$my_name = "Chioma";
$present_time = date (format:"H:i");
echo"<br>";

echo "present_time: $present_time <br>";

if ($present_time >= 00.00 && $present_time < 12.00) {
echo "<h3> Good Morning, $my_name! </h3";
}


else if ($present_time >= 12.00 && $present_time < 16.00) {
    echo "<h3> Good Afternoon, $my_name! </h3";
    }

else if($present_time >= 16.00 && $present_time < 23.59) {
        echo "<h3> Good Night, $my_name! </h3";
    }
else {
        echo "<h3> Hello, $my_name! </h3>";
       }

       echo "<br>";

//     //    Switch STATEMENT


$today = date (format: "D");
echo "Today is: $today <br>";

switch ($today) {
    case "Mon":
      echo "Hello everybody, It's Monday. Have a great week!";
        break;
    case "Tue":
       echo "Hello everybody, It's Tuesday. Do have a splendid week!";
        break;
    case "Wed":
       echo "Hello everybody, It's Wednesday. Do have a wonderful week!";
        break;
    case "Thu":
       echo "Hello everybody, It's Thursday. Do have a miraculous week!";
        break;
    case "Fri":
       echo "Hello everybody, It's Friday. Do have a beautiful week!";
        break;
    case "Sat":
       echo "Hello everybody, It's Saturday. Do have a blisful week!";
        break;
    case "Sun":
       echo "Hello everybody, It's Sunday. Do have a wishful week!";
        break;
    default:
       echo "Sorry this is not a day of the week!";
        break;
}

echo "<br>";
// // PHP LOOPS
// (Types:)
// (1) --while loops ---- 

// EXAMPLE 1:

$j = 2;
while ($j <8) {
  echo $j;
  $j++;
}

echo "<br>";

//  EXAMPLE 2 adding 8 to the output by adding = 
$j = 2;
while ($j <= 8) {
  echo $j;
  $j++;
}



// (2) --do...while loops

// (3) --for -loops

// 11-11-24----by evans

// Loops helps to run a sequence of count continously without you having to code them any times.

// puting in commands one by one example:
/* $cars = array("BMW", "Lexus", "Ferarri", "RollsRoyce");

/*The WHILE loop.*/ 

$numbers = 1;

// while ($numbers <= 10 ) {
// echo $numbers."<br>";
// $numbers++;
// }

// // The DO WHILE loop.
// $numbers = 1;
// do { echo $numbers."<br>";
//     $numbers++;

// }while ($numbers <= 10 );


// The FOR LOOP
// in the for loop, everything stays within the bracket
// the bracket contains a) the variable assigned, b)the statement and 3)the incremental operator

for ( $numbers = 1; $numbers <= 10; $numbers++) {
    echo $numbers."<br>"; 
}


// FOR EACH
// long process
/* $cars = array("BMW", "Lexus", "Ferarri", "RollsRoyce");
echo "I Love $cars[0] <br>";
echo "I Love $cars[1] <br>";
echo "I Love $cars[2] <br>";
echo "I Love $cars[3] <br>"; */

 $cars = array("Bmw", "Lexus", "Ferarri", "RollsRoyce");

 foreach ($cars as $car) {
    echo "I Love $car <br>";
 }


echo "<br>";
// class work 
// question: create an app that print  numbers from 1-100, echo fizz at the multiples of 3

for ( $numbers = 1; $numbers <= 100; $numbers++) {
   if ($numbers % 15 == 0) {
    echo "FizzBuzz <br>";

   } elseif ($numbers % 5 == 0){
echo "Buzz <br>";

   } elseif ($numbers % 3 == 0){
echo "Fizz <br>";

 
   }else echo $numbers."<br>";


}

// 15/11/2024
// ARRAY AGAIN (ANOTHER METHOD OF CREATING ARRAY)

$domesticAnimals = array("Dog", "Cat", "Horse", "Goat", "Cow");
 
// THE NEW ARRAY 
$cities = ["Asaba", "Warri", "Ughelli", "sapele", "Agbor"];

echo 
$domesticAnimals [0];
echo "<br>";



// TYPES OF ARRAY
// 1. INDEX ARRAY- The position of the items are in mumbers eg: [0],[1],[2]... examples are above.
// 2. ASSOCIATIVE ARRAY - the position of the items are the names which is used to access the items[ behind them are a given name.]
// 3. MULTI-DIMENSIONAL ARRAY - its an array that has other arrays inside it.

// ARRAY COUNT- USED TO KNOW THE NUMBER OF ITEMS INSIDE AN ARRAY

// count
echo count ($domesticAnimals);

echo "<br>";

// array push - used to connect two array 
array_push($cities, "Abraka", "Effurun", "Patani","Ozoro",);
var_dump($cities);

echo "<br>";
// changng the value of an already existing item = changing the [2] from Ughelli to Ogwashi-uku 

$cities[2]= "Ogwashi-Uku";
echo "<br>";
var_dump($cities);

echo "<br>";
// ASSOCIATIVE ARRAY - the name can also be inside the quote- to link a name to an item use =>
$Phone = [ "Brand" => "iphone", "Model" => "14 pro", "Color" => "white", "ROM" => 256];

echo "<br>";
var_dump($Phone);

// changing or updatin items in an associative array
$Phone["Model"] = "15 pro";
echo "<br>";

var_dump($Phone);

// EVANS PROJECT HUB - https://github.com/elvincedik/backend-project




// FUNCTIONS - A block of codes that is set to carry out a particular task or functions,and it can be used repaeatedly.
// php has over 1k inbuilt functions created for developers - you must invoke a function for it to be outputted.

function greetMe () {
echo "<br> good afternoon";

echo "<br>";

}
 greetMe ();

function HomeAddress ($snumber, $sname,) {
    echo " $snumber $sname Asaba. <br>";

}

HomeAddress ("5" , "DLA");
HomeAddress ("8" , "Ezenei");


// HOW TO EDIT SAME MULTIPLE TEXT - EXAMPLE: CHANGING THESIS TO THESE
?>


