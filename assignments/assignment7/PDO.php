<?php

public class Pdo {

//error for no file entered
if ($_POST['filename']!=""){
    $filename = $file['name'];
}
else{
    echo 'error^^^No file name was entered';
}

//error for no file uploaded
if ($file['file'] != "") {
    $file = $_FILES['file'];
}
else {
    echo 'error^^^No file was uploaded. Make sure you 
    choose a file to upload.';
}

//error for file size too big
if($file['size'] < 100000){
	if(move_uploaded_file($file['tmp_name'], '../uploadedfile/'.$file['name'])){	
        $txt = {"filename":"$filename", "filepath": "uploadedfile/$filename"};
		$datafile = fopen('../data_file/datafile.txt', 'w');
		fwrite($datafile, $txt);
		fclose($datafile);
		$content = file_get_contents('../data_file/datafile.txt');	
	}	
}
else {
	echo 'error^^^The file is too large';
}

//error for file not being a pdf
if ($file['type']!= '../' . $filename . '.pdf'){
    echo 'error^^^PDF files only'
}

//error for file can't be moved


//error for database couldn't enter  record


}
?>