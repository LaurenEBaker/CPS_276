<?php 
class Calculator {


    public function calc($opp="error",$num1="error",$num2="error") {

    $answer;
    if ($num1== "error" || $num2=="error") {
        echo "You must enter a string and two numbers <br>";
    }
    else  {
    if ($opp=="/") {
        if ($num2!=0){
            $answer= "The division of the numbers is ".($num1/$num2)."<br>";
            return $answer;
        }
        else {
           echo "Cannot divide by zero <br>"; 
        }
    }
    else if ($opp=="*"){
        $answer="The product of the numbers is ".($num1*$num2)."<br>";
        return $answer;
    }
    else if ($opp=="-") {
        $answer= "The difference of the numbers is ".($num1-$num2)."<br>";
        return $answer;
    }
    else if($opp=="+"){
        $answer= "The sum of the numbers is ".($num1+$num2)."<br>";
        return $answer;
    }
    else if ($opp=="error"){
        echo "You must enter a string and two numbers <br>";
    }
    else{
        echo "You must enter a string and two numbers <br>";
    } }}}
?>
