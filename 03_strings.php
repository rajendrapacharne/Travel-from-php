<?php
 $str = "this is string";
 echo "<br>";
echo $str;
$lenn = strlen($str);
echo "<br>";
echo "the length of string is ".$lenn ." Thank you";
echo "<br>";
echo " the number of word count is ". str_word_count($str)."Thank you";
echo "<br>";
echo " the reversed string is :::::".strrev($str) ;
echo "<br>";
echo " the search for is in this string is  :::::".strpos($str,"is") ;
echo "<br>";
echo " the replace string is  :::::".str_replace("is","at",$str) ;
?>