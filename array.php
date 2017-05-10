<!-- Array -->
<?php
$new_array = array(1,2,3,4,5);
foreach($new_array as $index => $value)
{
   $new_array[$index] = $value*2;
}
$arr = $new_array;
var_dump($arr);
?>