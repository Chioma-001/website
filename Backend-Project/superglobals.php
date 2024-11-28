<?php

$y = 22;

// function myfuction(){
//     echo $GLOBALS ['y'];

// }

// myfunction ();
// echo "<br>";


function myfuctions() {
global $y;
    echo $y;
}

// myfunction();

// SUPERGLOBALS TO BE CONSIDERED 
// $GLOBALS
// $_SERVER
// $_POST
// $_GET

echo $_SERVER [ 'PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
// THE DIFFERENCE BTW SINGLE QUOTE'AND DOUBLE QUOTE " AND WHEN IT SHOULD BE USED.
// double quote outputs the variable inside the quote, while the single quote outputs the strings. example

echo "<br>";

 $z = "Mary";
 echo "Hello $z";
 echo "<br>";
 echo 'Hello $z';

?>

<form action="<?php echo $_SERVER ['PHP_SELF'] ?>"
method = "POST">

<input type = "text" placeholder= "First Name" name="fname">
<br><br>

<input type = "text" placeholder= "Last Name" name="lname">
<br><br>

<button type="submit">Submit</button>

</form>


<?php 

$first_name = $last_name = "";
// initialise variables to empty string 

if ($_SERVER['REQUEST_METHOD']=='POST'){
    // checking if form s submitted via POST method
    $first_name = htmlspecialchars ( $_POST['fname']);

    // $_POST ['fname'] hold form data of a form that used post method
    // htmlspcialchars help to prevent malicious codes

    $last_name = $_POST['lname'];

    echo "<h2> Good Afternoon $first_name $last_name </h2>";

// <script>malicious code displayed as plain text</script>

}


?>