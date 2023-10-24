<?php
class Directories{
private $directoryName;
private $fileCon;
private $path;
private $directory = "directories";
private $readme="readme.txt";

public function __construct() {
    if(isset($_POST['directoryName'])){
        $this->directoryName=$_POST['directoryName'];
        $this->path=$this->directory.'/'.$_POST['directoryName'];
    }
    if (isset($_POST['fileCon'])) {
        $this->fileCon=$_POST['fileCon'];
    }
}

public function makeNew() {
    if(file_exists($this->path)){
        return("this folder already exists");
    } else {
        mkdir($this->path,0777,true);
        $handle = fopen("$this->path/readme.txt", "w+"); 
        fwrite($handle, $this->fileCon); 
        fclose($handle);
        return ("<p><a href=" . $this->path . " target=".'_blank'.">Path where file is located</a></p>");
        
    }
}

}
?>