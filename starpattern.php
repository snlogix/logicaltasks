<!-- Logic Development Exercise 1 -->
<?php
echo "</br>";
echo "Logic Development Exercise 1  ";
echo "</br>";
for($i=1;$i<=5;$i++){//define as a coloumn
    for($j=1;$j<=5;$j++){//define as a row
        if($j<=$i){
            echo "*";
        }
        else{
            echo "&nbsp";
        }
    }
    echo "</br>";
}
?>
<!-- Logic Development Exercise 2 -->
<?php
echo "</br>";
echo "Logic Development Exercise 2";
echo "</br>";
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($j>=$i){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "</br>";
}
?>
<!-- Logic Development Exercise 3  -->
<?php
echo "</br>";
echo "Logic Development Exercise 3";
echo "</br>";
$n = 1;
    for($i=1;$i<=5;$i++){
        for ($j=1;$j<=$i;$j++){
            echo $n." ";
            
        }
        $n = $n + 1;
        echo "</br>";
    }
?>
<!-- Logic Development Exercise 4 -->
<?php
$n = 1;
echo "<br>";
echo "Logic Development Exercise 4";
echo "</br>";
  for ($i=0;$i<4;$i++){
    for ($j=0;$j<=$i;$j++){
        echo $n." ";
        $n = $n + 1;
    }
    echo "</br>";
  }
?>
<!-- Logic Development Exercise 5 -->
<?php
echo "</br>";
echo "Logic Development Exercise 5";
echo "</br>";
for ($i=1;$i<=4;$i++){
    $k=1;
    for ($j=1;$j<=7;$j++){
        if($j>=5-$i&& $j<=3+$i){
            echo $k;
            $j<4?$k++:$k--;
        }
        else{
            echo "&nbsp";
        }
    }
    echo "</br>";   
}
?>
<!-- Logic Development Exercise 6 -->
<?php
echo "</br>";
echo "Logic Development Exercise 6";
echo "</br>";
for ($i=1;$i<=4;$i++){
    for ($j=1;$j<=7;$j++){
        if($j>=5-$i&& $j<=3+$i){
            echo "*";
        }
        else{
            echo "&nbsp";
        }
    }
    echo "</br>";   
}
?>
<!-- LogicDevelopment Exercise 7 -->
<?php
echo "</br>";
echo "Logic Development Exercise 7";
echo "</br>";
$k=0;
for ($i=1;$i<=7;$i++){
    $i<=4?$k++:$k--;
    for($j=1;$j<=7;$j++){
        if($j>=5-$k&&$j<=3+$k){
            echo "*";

        }else{
            echo "&nbsp";
        }

    }
    echo "</br>";
}
?>
 <!-- LogicDevelopment Exercise 8 -->
    <?php
        echo "</br>";
        echo "Logic Development Exercise 8";
        echo "</br>";
            $s = 0;
            $d = 5;
            $t = 10;
            $series = [];
            $sum = 0;
        
            for ($i = 0; $i < $t; $i++) {
                $ct = $s + ($i * $d);
                $series[] = $ct;
                $sum = $sum + $ct;
            }
            echo implode(" ", $series);
            echo "</br>";
            echo "Total Sum of the series $t terms is $sum"; 
            echo "<br>";  
    ?>
<!-- LogicDevelopment Exercise 9 -->
<?php 
echo "</br>";
echo "Logic Development Exercise 9";
echo "</br>";
function ternary($n){
// print_r($b);
// die();
$b= $n >  30 ?"greater than 30 ":
($n > 20 ?"greater than 20":
($n > 10 ? "greater than 10"
:"Input a number atleast greater than 10!"));
    echo $n. $b. "</br>";
}
ternary(32);
ternary(25);
ternary(11);
?>
<!-- Logic Development Exercise 10 -->
<?php 
echo "</br>";
echo "Logic Development Exercise 10";
echo "</br>";
$d =1;
$t =6;
$sum=0;
for ($i =1;$i<$t;$i++){
    echo " ".$d ;
    $sum += $d;
    $d++; 
}
echo "<br>";
echo "The final total sum is: " . $sum;
?>
<br></br>
Logical Development Exercise 11
<form action=""method="post">
    <input type="text" value="" name="s" placeholder="enter a first value" >
     <input type="submit" value="submit" name="reverse">
 </form>
 <?php
 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['s'])){
    try{
    $a=$_POST['s'];
    $b=1;
    $sum=0;
    if (!is_numeric($a)) {
        throw new Exception('Input must be a numeric value.');
    }
 
 for($i=1;$i<=10;$i++){
     $c=$a+$b;
     echo "&nbsp".$c;
     $a=$b;
     $b=$c;
     $sum =$sum + $b;
      
 }
 echo "the total of sum is".$sum ; 
} catch(Exception $e){
    echo "error: ". $e->getmessage();
}

 }
?>
<br></br>
logical development exercise 12
 <form action=""method="post">
    <input type="text" value="" name="rev" placeholder="enter a first value">
     <input type="submit" value="submit" name="reverse">
 </form>
<?php

 if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['rev'])){
    // print_r($_POST['rev']);
    // die;
    try {
        $input = $_POST['rev'];
        if (!is_numeric($input)) {
            throw new Exception('Input must be a numeric value.');
        }
    
        $reverse = strrev($input);
        echo $reverse; 
       
 }catch(Exception $e){
    echo "error". $e->getmessage();
 }

}
?>
<br></br>
logical development exercise 13
 <form action=""method="post">
    <input type="text" value="" name="prime" placeholder="enter a number">
     <input type="submit" value="submit" name="submit">
 </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['prime'])){

try {
    $n =$_POST['prime'];
    $j ='0';
    if (!is_numeric($n)) {
        throw new Exception('Input must be a numeric value.');
    }
    
    for($i=1;$i<=5;$i++){
        if($n%$i==0){
            $j++;
        }
    }
    if ($j==2){
        echo $n." it is prime number";
    }else {
        echo $n." is not a prime number";
    }
   
}catch(Exception $e){
    echo "error ". $e->getmessage();
 }
}
?>
<br></br>
logical development exercise 14
 <form action=""method="post">
    <input type="text" value="" name="leap" placeholder="enter a year">
     <input type="submit" value="submit" name="submit">
 </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['leap'])){
try{
    $n=$_POST['leap'];
    if (empty($n)) {
        throw new Exception('Input field is empty.');
    }
    if (!is_numeric($n)) {
        throw new Exception('Input must be a numeric value.');
    }
   
if ($n%400==0 ||$n%4==0 && $n%100 != 0){
    echo $n. " is a leap year";
}else {
    echo $n. " is not a leap year";
}
}catch(Exception $e){
    echo "error ". $e->getmessage();
 }
}
?>
<br></br>
logical development exercise 15
 <form action=""method="post">
    <input type="number" value="" name="table" placeholder="enter a number" required>
     <input type="submit" value="submit" name="submit">
 </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['table'])){
    try{
$j= $_POST['table'];
    if(empty($j)){
        throw new Exception("input field is required");           
    }

    if(!is_numeric($j)){
        throw new Exception(" Input must be a numeric value.");           
    }
for ($i=1;$i<=$j;$i++){
    echo "<br>";
        $sum= $j*$i;
        echo $j. " * " .$i ."=" .$sum;     
}
}catch(Exception $e){
    echo "error: ".$e->getmessage();
}
}
echo "<br>";
echo "logical development exercise 16";    
echo "</br>";
    $a = array(10, 20, 52, 105, 112, 89, 96);
    $b = PHP_INT_MIN;
    try{
        if(empty($b)){
            throw new Exception("input field is required");           
        }
        if(!is_numeric($b)){
            throw new Exception(" Input must be a numeric value.");           
        }
        foreach ($a as $val) {
            if ($val > $b) {
                $b = $val;
            }      
        }
        echo "The largest number in array is : " .$b;
        echo "<br>";
    }catch(Exception $e){
        echo "error :" .$e->getmessage();
    }

echo "<br>";
echo "logical development exercise 17";    
echo "</br>";
$a = array(10, 20, 52, 105, 112, 89, 96);
$b = PHP_INT_MAX;
try {
    if(empty($b)){
        throw new Exception("input field is required");           
    }

    if(!is_numeric($b)){
        throw new Exception(" Input must be a numeric value.");           
    }
foreach ($a as $val) {
    if ($val < $b) {
        $b = $val;
    }
}
echo "The smallest number in the array is: " . $b;
}catch(Exception $e){
    echo "error :" .$e->getmessage();
}
?>
    <?php
    // echo "<br>";
    // $s=2;
    // $d=4;
    // $t=10;
    // $sum=0;
    // for($i=1;$i<=$t;$i++){
    //     $c=$s+($sum*$d);
    //     $sum++;
    //     echo "&nbsp" .$c;
    // }
?> 




