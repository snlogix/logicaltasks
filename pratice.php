<?php
$age = 13;
if($age>=65){
    echo "driver does not drive the car ";
}
elseif($age>=25){
    echo "driver can drive the car";
}
else {
    echo "does not drive";
}
echo "</br>";
$month = 9;
switch ($month){
    case 1 :
        echo "total number of days is 31 </br>";
        break;
    case 2 :
        echo "total number of days is 28 </br>";
        break;  
    case 3 :
        echo "total number of days is 31 </br>";
        break;
    case 4 :
        echo "total number of days is 30 </br>";
        break;
    case 5 :
        echo "total number of days is 31 </br>";
        break;
    case 6 :
        echo "total number of days is 30 </br>";
        break;  
    case 7 :
        echo "total number of days is 31 </br>";
        break;
    case 8 :
        echo "total number of days is 30 </br>";
        break;
    default :
        echo "no month is there";
        break;      
}



echo "<br>";
echo "while loops in php";echo"<br>";

$i = 0; 
while($i<5){
    echo "The value of i is ";
    echo $i+1;
    echo "<br>";
    $i+=1; 
} 
echo "</br>";


function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohanDas = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohanDas);
$sumMarked = avgMarks($rohanDas);

$harry = [99, 98, 93, 94, 17, 100];
$sumMarksHarry = processMarks($harry);
$sumMarksHarrypotter = avgMarks($harry);
echo "Total marks scored by Rohan out of 600 is $sumMarks and the percentage is $sumMarked <br>";
echo "Total marks scored by Harry out of 600 is $sumMarksHarry and the percentage is $sumMarksHarrypotter";

echo "</br>";
$year= date("Y");
echo "<br>";
echo "copyright $year||All right reserved";
echo "<br>";
echo date(DATE_RFC2822);
echo "<br>";
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));




$fav = array (
    'shubham' => 'red',
    'shiv' => 'blue',
    'sid' => 'yellow');

    foreach ($fav as $key => $value){
        echo "<br>favourite color of $key is $value";
    }
    echo "</br>";
    echo $fav['shiv'];   
?> 


