<?php
$n=0;
class Shiv extends Exception{
    function errormessage ()    {
        return this->message();
        }
}
try {
    if($n==0){
        throw new Exception("Please enter valid number");
    }
    if($n==4){
        throw new Shiv("Number is 4");
    }
echo $n/2;
}catch(Exception $e){
        echo $e->getmessage();
}catch(Shiv $e){
    echo $e->getmessage();
}
?>
