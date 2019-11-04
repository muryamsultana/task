<?php
/*
Job Match function
taking company and job value from db
*/

$expertise = array("bike","driver's license");
$jobs = array("Company A"=>"requires an apartment or house, and property insurance.",
			  "Compnay B"=>"requires 5 door car or 4 door car, and a driver's license and car insurance.",
			  "Company C"=>"requires a social security number and a work permit. ",
			  "Company D"=>"requires an apartment or a flat or a house.",
			  "Company E"=>"requires a driver's license and a 2 door car or a 3 door car or a 4 door car or a 5 door car.",
			  "Comapny F"=>"requires a scooter or a bike, or a motorcycle and a driver's license and motorcycle insurance.",
			  "Company G"=>"requires a massage qualification certificate and a liability insurance.",
			  "Company H"=>"requires a storage place or a garage.",
			  "Company I"=>"doesn't require anything, you can come and start working immediately.",
			  "Company J"=>"requires a PayPal account."
			  );

//print_r($arr);

$arr1 = array_filter(
    // the array you wanna search in
    $jobs,
    // callback function to search for certain sting
    function ($value, $key){ 
		$expertise = array("bike","driver's license");
		$count = 0;
		$arr1 = array();
		foreach($expertise as $experti){
        if(strpos($value,$experti) !== false){
			$count++;
		}
		}
		if($count == count($expertise))
			$arr1[$key] = $value;
		return $arr1;
    },
	ARRAY_FILTER_USE_BOTH
);

$arr = array_diff($jobs,$arr1);
echo "\n I can apply for companies <br>";
foreach($arr1 as $k=>$apply){
		echo $k."<br>";
}
echo "<br><br>I cannot apply for companies <br>";
foreach($arr as $k=>$apply){
		echo $k."<br>";
}


?>