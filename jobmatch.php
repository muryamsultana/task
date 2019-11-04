<?php
/*
Job Match function
taking company and job value from db
*/

$expertise = array("bike","driving license");

$jobs = array("companyA"=>"requires an apartment or house, and property insurance.",
			  "CompnayB"=>"requires 5 door car or 4 door car, and a driver's license and car insurance.",
			  "companyC"=>"requires a social security number and a work permit. ",
			  "companyD"=>"requires an apartment or a flat or a house.",
			  "companyE"=>"requires a driver's license and a 2 door car or a 3 door car or a 4 door car or a 5 door car.",
			  "comapnyF"=>"requires a scooter or a bike, or a motorcycle and a driver's license and motorcycle insurance.",
			  "companyG"=>"requires a massage qualification certificate and a liability insurance.",
			  "companyH"=>"requires a storage place or a garage.",
			  "compoanyI"=>"doesn't require anything, you can come and start working immediately.",
			  "companyJ"=>"requires a PayPal account."
			  );
foreach($expertise as $experti){
		
$res  = preg_grep("/$experti/i", $jobs);

print_r(array_keys($res));
}

?>