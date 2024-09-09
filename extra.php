<?php
echo "<br>";
echo "extra logic devlopmnent exercise";
echo "</br>";
for ($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($j>=$i){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
        echo "<br>";
}

echo "<br>";
echo "extra logic devlopmnent exercise";
echo "</br>";
for ($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($j>=$i){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
        echo "<br>";
}

echo "<br>";
echo "extra logic devlopmnent exercise";
echo "</br>";
for ($i=1;$i<=4;$i++){
    for ($j=1;$j<=8;$j++){
        if($j>=5-$i&&$j<=4+$i){
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>"; 
}
?>
<br>extra logic devlopmnent exercise
</br>
 <form action=""method="post">
    <label for="">First number:</label>
    <input type="number" value="first number" name="first" placeholder="A value"><br>
    <label for="">Second number:</label>
     <input type="number" value="second number" name="second" placeholder="B value"><br>
     <input type="submit" value="submit" name="reverse">
 </form>
<?php
 if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['first'])&& isset($_POST['second'])){
$a= $_POST['first'];
$b= $_POST['second'];
$temp=$a;
$a=$b;
$b=$temp;
echo "The reverse value is" . " A =".$a. '&nbsp'. "B =".$b;
echo "<br>";
 }
?>