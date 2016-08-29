<?php


//Array containing Months along with dates. 
$activeMonths = array(
	"August" => array(27 => "Celtics",28 => "Lakers", 29 => "Bulls" ),
	"October" => array(26 => "Miami",28 => "Detroit", 29 => "Cleveland"),
	"November" => array(1 => "Philadelphia",3 => "Sacramento",5 => "Washington",7 => "Chicago",
						9 => "Minnesota",11 => "Utah",13 => "Oklahoma City",14 => "Indiana",
						16 => "New Orleans",19 => "Dallas",21 => "Milwaukee",23 => "Phoenix",
						25 => "Washington",27 => "Milwaukee",29 => "San Antonio"), 
	"December" => array(1 => "Memphis",2 => "Philadelphia",4 => "Detroit",6 => "Washington",
						7 => "Boston",9 => "Charlotte",10 => "Denver",13 => "Atlantas",14 => "LAC",
						16 => "Brooklyn",18 => "Toronto",20 => "Miami",22 => "New York",23 => "LA Lakers",
						26 => "Memphis",28 => "Charlotte"),
	"January" => array(1 => "Indiana",2 => "New York",4 => "Atlanta",6 => "Houston",8 => "LA Lakers",
					   11 => "LAC",13 => "Portland",14 => "Utah",16 => "Dever",18 => "New Orleans",
					   20 => "Milwaukee",22 => "Golden State",24 => "Chicago",27 => "Boston",29 => "Toronto",
					   30 => "Minnesota"),
	"February" => array(1 => "Indiana",3 => "Toronto",4 => "Atlanta",7 => "Houston",9 => "Philadelphia",
						11 => "Dallas",13 => "Miami",15 => "San Antonio",23 => "Portland",25 => "Atlanta"),
	"March" => array(1 => "New York",3 => "Miami",5 => "Washington",6 => "New York",8 => "Chicago",10 => "Charlotte",
					 11 => "Cleveland",13 => "Sacramento",16 => "Golden State",17 => "Phoenix",20 => "Philadelphia",
					 22 => "Charlotte",24 => "Detroit",27 => "Toronto",29 => "Oklahoma City",31 => "Boston"),
	"April" => array(1 => "Brooklyn",4 => "Cleveland",6 => "Brooklyn",8 => "Indiana",10 => "Chicago",12 => "Detroit")
);

//Check to see if any games are playing in current month. 

$month = date('F');

if(array_key_exists($month, $activeMonths)) {
	
//If not, print "No scheduled games this month"
	echo "<h1>". $month . "</h1>";
	echo $month ."<br><ul>";
	foreach ($activeMonths[$month] as $monthDate => $teams) {
	echo "<li>" . $monthDate . " " . $teams .  "</li>";
	}
	echo "</ul>";

} else {
    echo "No scheduled games this month <br>";
//If so, print the dates they are playing.

}