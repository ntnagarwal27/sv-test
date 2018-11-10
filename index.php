<?php
include "config.php";

class ffret{ 


/*Function to scan and rename the files if found according to user input w.r.t to the rules defined*/

public function check($files,$file_name){
 
 $files_dir = scandir(DIR_URL.'/'.'wd/'.$files, 2);
 foreach ($files_dir as $key => $value) {
 		//echo $value."\n";
 	    if($file_name == $value)
 	    {
           $rename = rename(DIR_URL.'/'.'wd/'.$files.'/'.$value, DIR_URL.'/'.'wd/'.$files.'/'.$files.date("Y-m-d"));
 	    	if($rename){
 	    		echo "successfully updated"."\n";
 	    	}
 	    }
 	}	
}

/*
Function to read the config files and find the category name defined 
in the directory according to the input given by the user.
The function will get the input by the user as an arguments and the 
Further search and rules matching will be processed according to the argument $handle passed
*/

function getCategoryName($handle){
    $line = trim(fgets($handle));
	if($line != ''){
	echo "Please enter the file_name";
    $file_name = trim(fgets(fopen("php://stdin","r"))); // Get the input provided by the user

	$n = 0;
	$myfile = json_decode(file_get_contents("ffret.json"));
	foreach ($myfile->downloads as $key => $value) {
		$key = trim($key);
		if($key === $line)
		{   
			echo $this->check($key,$file_name);
			$n++;
		}
    }
	if($n==0)
		{
		  echo "rules does'nt matched"."\n";	
		}
     }
  }
}



$obj = new ffret(); 
echo "Please enter the category";
$handle = fopen("php://stdin","r"); // Get the input provided by the user
$obj->getCategoryName($handle); // Calling the handle function on tool loads


