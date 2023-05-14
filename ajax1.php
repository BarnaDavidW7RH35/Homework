<?php
$a = Array("Anna","Brittany","Cinderella","Diana","Eva","Fiona","Gunda","Hege",
      "Inga","Johanna","Kitty","Linda","Nina","Ophelia","Petunia","Amanda",
      "Raquel","Cindy","Doris","Eve","Evita","Sunniva","Tove","Unni","Violet",
      "Liza","Elizabeth","Ellen","Wenche","Vicky");
$q=$_GET["q"]; 
if (strlen($q) > 0) {  
	$hint="";  
	for($i=0; $i<count($a); $i++) 
		if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q)))) 
			if ($hint=="")  
				$hint=$a[$i]; 
			else 
				$hint=$hint." , ".$a[$i];      
} 
if ($hint == "") 
	$response="no suggestion"; 
else 
	$response=$hint;
echo $response;
?> 
