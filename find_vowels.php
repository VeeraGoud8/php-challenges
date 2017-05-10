<!-- Find Vowels -->
<?php
$string="Veera";
$vowels = array('a','e','i','o','u');
        //find length of the string
        $len = strlen($string);
        $num = 0;
        
        //loop through each letter
        for($i=0; $i<$len; $i++)
        {
            if(in_array($string[$i], $vowels))
            {
                $num++;
            }
        }
        echo "Number of vowels : $num";
 ?>