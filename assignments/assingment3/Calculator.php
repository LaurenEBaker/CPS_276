<?php 
class Calculator {


    public $Calculator = calc($opp="error",$num1="error",$num2="error");
public $answer;
if ($opp != "-" or "+" or "/" or "*"){
    echo "you must enter a string and two numbers";
    if ($opp=="/") {
        if ($num2!=0){
            $answer= ($num1/$num2);
        }
        else {
           echo "cannot divide by zero"; 
        }
    }
    if ($opp=="*"){
        $answer=($num1*$num2);
    }
    if ($opp=="-") {
        $answer= ($num1-$num2);
    }
    if ($opp=="+"){
        $answer=($num1+$num2);
    }
    if ($num1= "error" or string) {
        echo "you must enter a string and two numbers";
         if ($num2= "error" or string) {
             echo "you must enter a string and two numbers";

    }}}}
?>
