<?php 
$numbers = array(1,2,3,4,5);
foreach ($numbers as $value) 
{ echo "Value is $value"."<br>";
}
$myArray = array("GEC Modasa", "GECPALANPUR", "Merchant", "LJIT", "PDPU");
foreach ($myArray as $value) 
{ echo "College Name is <b>$value<b/>"."<br>";
}
// SECOND METHOD
$Friends[0] = "Meet";
$Friends[1] = "Sahil";
$Friends[2] = "Prit";
$Friends[3] = "Dhaval";
$Friends[4] = "Amit";
foreach ($Friends as $value) 
{ echo "Friend is <b>$value<b/>"."<br>";
}
echo "<br>";
print_r($numbers);
echo "<br>";
print_r($Friends);
?>