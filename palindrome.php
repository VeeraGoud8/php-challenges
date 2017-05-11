<!-- Palindrome using inbuilt function -->
<?php
$a = "madam";
$b =  strrev($a);
    if($a == $b)
    {
        print "<br>".$b." is Palindrome";
    }
     else
     {
        print "<br>".$b. "is not Palindrome"; 
    }
?>


<!-- Check palindrome without using inbuilt function -->
<?php
$mystring = "madam";
//echo 'String: <b>' . $mystring . "</b>";
$myArray = array(); 
$myArray = str_split($mystring); 
$len = sizeof($myArray); 
$newString = '';
for ( $i = $len; $i >= 0; $i-- ) {
$newString .= $myArray[$i];
}
if ( $mystring == $newString ) 
{
echo "$mystring is a palindrome";
} 
else
{
echo "$mystring is not a palindrome";
}
?>


