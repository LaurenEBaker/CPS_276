<?php

 class FileProc {
private $file ="";
public $arr="";


	public function fileUpload(){
		$name = $_POST['name'];
		$file = $_FILES['userfile'];

		//error for no file entered
		if ($_POST['name']==""){
			return $arr='No file name was entered';
		}
		//error for no file uploaded
		if ($file['name']=="") {
			return $arr='No file was uploaded. Make sure you choose a file to upload.';
		}

	//error for file size too big
	if($file['size'] < 100000){
		if(move_uploaded_file($file['name'], '../uploadedfile/'.$file['name'])){	
        	$txt = ("filename"."$name" && "filepath". "uploadedfile/$name");
			$datafile = fopen('../data_file/datafile.txt', 'w');
			fwrite($datafile, $txt);
			fclose($datafile);
			return $arr= "filepath";
		}	
	}
		else {
			return $arr='The file is too large';
	}

	//error for file not being a pdf
	if ($file['type']!= '.pdf'){
    	return $arr="PDF files only";
	}

	//error for file can't be moved
	if (move_uploaded_file($file['$name']) == false) {
		return $arr='Could not move file';
	}
 

	//error for database couldn't enter  record
		if ($_FILES[file($file)]["error"] == 7) {
			return $arr='There was an error adding the record';
		}
		//There were no errors
		else {
			return $arr='File has been added';
		}
	}

	public function displayList(){
		return ('');
		}

	public function init(){
		if(count($_POST) > 0){
		return [$this->fileUpload(), $this->displayList()];
		}
		else {
		return ["", $this->displayList()];
		}
	}
}
?>