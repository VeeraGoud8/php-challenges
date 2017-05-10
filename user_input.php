<?php
echo "Enter any number".PHP_EOL;
$num=read_stdin();
function read_stdin()
{
        $fr=fopen("php://stdin","r"); // open our file pointer to read from stdin 
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
} 
if($input<15)
{
	echo "Entered number is below 15, please enter different input<br>";
}
elseif ($input%3==0) 
{
	echo "Fuzz <br>";
}
elseif($input%5==0)
{
	echo "buzz <br>";
}
else
{
	echo "Fuzz <br>";
	echo "Buzz <br>";
}

?>