<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP first site</title>
</head>
<body>
   <Div class="container">
   This is first php website Rajendra 
   
   <?php
   echo "<br>";
    define ('PI',3.14);
   echo"hello world php hide";
    echo "<br>";
    // secret algorithm
    // single line comment
    /*
this is multi line 
comment


 ctrl+/
    */
$variable1=10;
$variable2=5;
echo $variable1;
echo $variable2;
//echo"    "
echo"<br>";
echo $variable1 + $variable2;

//Operatiors in php


// arithmatic operator
echo "the value of variable 1 + variable 2 is ";
echo"<br>";
echo $variable1 + $variable2;

echo"<br>";
echo "the value of variable 1 - variable 2 is ";
echo $variable1 - $variable2;
echo"<br>";
echo "the value of variable 1 * variable 2 is ";
echo $variable1 * $variable2;
echo"<br>";
echo "the value of variable 1 / variable 2 is ";
echo $variable1 / $variable2;


// assignment operator
$newVar = $variable1;
$newVar *= 2;
echo "<br>";
echo "the value of new variable is ";
echo $newVar;
echo "<br>";


// comparison operator
//echo "<h1> Comparison operator </h1>" 
// it return boolean value

echo " the value of 1==4 is ";
echo var_dump(1==4);
echo " <br> ";
echo " the value of 1!=4 is ";
echo var_dump(1!=4);
echo " <br> ";
echo " the value of 1<=4 is ";
echo var_dump(1<=4);
echo " <br> ";
echo " the value of 1>=4 is ";
echo var_dump(1>=4);
echo "<br>";

// increment? decrement operator
echo $variable1++;
echo "<br>";
echo $variable1;
echo "<br>";
echo $variable2--;
echo "<br>";
echo $variable2;
// ++$variable1;
// --$variable1;


// logical operator
// and (&&)
// or(||)
// xor
// !(not)
//and---->
echo "<br>";
$myvar = (true and true);
echo var_dump($myvar);

//or----->
echo "<br>";
$myvar = (true or true);
echo var_dump($myvar);
echo "<br>";

 //xor---->
 echo "<br>";
$myvar = (true xor true);
echo var_dump($myvar);
echo "<br>";
   ?>
   <?php
    //data types in php
    // 1.string
    // 2.integer
    // 3.float
    // 4.boolean
    // 5.array
    // 6.object
    echo " <h1> Data types </h1> <br>";
    $var =67;
    echo var_dump($var);
    echo "<br>";
    $var =" this is string ";
    echo var_dump($var);
    echo "<br>";
    $var =77.9;
    echo var_dump($var);
    echo "<br>";
    $var =true;
    echo var_dump($var);
    echo PI; 

?>
   </Div> 
</body>
</html>