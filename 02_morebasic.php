<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial </title>
</head>
<style>
{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
.container{
    max-width:80%;
    background-color: pink;
    margin:auto;
    padding: 23px;
}
</style>
<body>
    <div class="container" >
    <h1> Lets learn about PHP </h1>
    your party status here 
    
    
    <?php
    echo "<br>";
    $age = 34;
    if($age>18){
        echo " you can go party";
    }
    else{
        echo " dont do this ";
    }
    echo "<br>";
    //array in php
    $lang = array("python","php","c","java");
    echo $lang[1];

    //Loops in php
    $a = 0;
    while ($a <= 10) {
        # code...
        echo "<br>";
        echo "the value of a is from while loop:";
        echo $a;
        $a++;
    }
    //do while Loop in php
    $a = 200;
    do{
        # code...
        echo "<br>";
        echo "the value of a is from do while loop :";
        echo $a;
        $a++;
    }while ($a <= 10) ;

    //for loop
    for ($a=0; $a <10 ; $a++) { 
        # code...
        echo "<br>";
        echo "the value of a is from for loop :";
        echo $a;

    }
foreach($lang as $value){
echo "<br> the value is from for each:";
echo $value;

}
function print5(){
    echo "<br>";
    echo "print function";

}
print5();
?>
    </div>
</body>
</html>