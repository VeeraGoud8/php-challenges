<!-- print Odd rows of 9 table -->
<?php
$NUM=9;
for($i=1;$i<=10;$i++)
{	
	if(($NUM*$i)%2==1)
	   echo "$NUM*$i=".$NUM*$i."<br>";
}
?>




