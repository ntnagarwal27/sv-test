<?php

function check($files){

foreach ($files as $key => $value) {
	if(is_dir($value))
	{
       
    
     echo filemtime($value);

	}
}
}
echo "Please enter the name";
$handle = fopen ("php://stdin","r");
$line = trim(fgets($handle));
if($line != ''){
$n = 0;
$myfile = json_decode(file_get_contents("ffret.json"));
foreach ($myfile->downloads as $key => $value) {
	$key = trim($key);
	if($key === $line)
	{
		echo "rules matched for ".$key."\n";
		$n++;
	}else
	{
		//echo "rules does'nt matched"."<br>";
	}

}
if($n==0)
	{
	  echo "rules does'nt matched"."\n";	
	}

}

// $fp = fopen('php://stdin', 'r');
// $files = array_slice(scandir('/var/www/html/test'), 2);
// check($files);
// echo "test pahe";



