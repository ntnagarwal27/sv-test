<?php

// fclose($handle);
// echo "\n"; 
// echo "Thank you, continuing...\n";

function check($files){

foreach ($files as $key => $value) {
	if(is_dir($value))
	{
       
     echo "Dir===".$value."<br>";
     echo filemtime($value);

	}else{
		echo "file===".$value."<br>";
	}
}
}
echo "Please enter the name";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != ''){
    echo $line;
    
}

$fp = fopen('php://stdin', 'r');
$files = array_slice(scandir('/var/www/html/test'), 2);
check($files);
echo "test pahe";



