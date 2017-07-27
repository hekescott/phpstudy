<!--数组-->

<?php
include "Test.php";
$name = 'john';
//$array1 = array(1,2,5);
//print_r ($array1);
//echo "</br>";
$myTest = new Test();
$myTest->name = "ke";
$myTest->age  =23;
print $myTest->name;
echo "<br>";
print $myTest->age;
//$person = Test::name;
//$array2 = array( "name1","name3","name2");
//print_r ($array2);

?>