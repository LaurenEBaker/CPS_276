<?php

class AddName {

    private $output;
public function ClearNames(){
    if(isset($_POST['AddName'])){
        return $output = $this->AddName(); 
    }
    else if (isset($_POST["ClearNames"])){
        return $output = "";
    }
    }

    public function AddName(){
        $nameArr=[];
        
        $tempArr= explode(" ",$_POST['name']);
        
        $name = "{$tempArr[1]}, {$tempArr[0]}";
        
        if($_POST['namelist'] !== ""){
            $nameArr = explode("\n",$_POST['namelist']);
        }
        array_push($nameArr, $name);
        sort($nameArr);
        return implode("\n",$nameArr);
        }
    }
        
?>