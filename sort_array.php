<!-- Sorting array using "sort" built-in function -->
<?php
$sort_array=array(4,5,3,1,2);
sort($sort_array);
$len=count($sort_array);
for($i=0;$i<$len;$i++)
{
	echo "$sort_array[$i]";
	echo "<br>";
}
?>

<!-- Sorting array using selection sort-->
<?php  
 echo "-----------Selection Sort-----------<br>"; 
function selection_sort($data)  
{  
for($i=0; $i<count($data)-1; $i++) {  
    $min = $i;  
    for($j=$i+1; $j<count($data); $j++) {  
        if ($data[$j]<$data[$min]) {  
            $min = $j;  
        }  
    }  
    $data = swap_positions($data, $i, $min);  
}  
return $data;  
}  
  
function swap_positions($data1, $left, $right) {  
    $temp = $data1[$right];  
    $data1[$right] = $data1[$left];  
    $data1[$left] = $temp;  
    return $data1;  
}  
$my_array = array(3, 0, 2, 5, -1, 4, 1);  
echo "Original Array :<br>";  
echo implode(', ',$my_array );  
echo "<br>Sorted Array :<br>";  
echo implode(', ',selection_sort($my_array)). PHP_EOL;  
?>  



