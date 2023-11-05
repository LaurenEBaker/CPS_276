<?php
require_once 'FileProc.php'; 
$fileProc = new FileProc();
$arr = $fileProc->init();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>File Upload and Display</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/main.css">
  
  </head>
  <body>
  <form method="post" action="index.php"> 
    <div class="container">
    <h2>Upload File</h2>
    <?php echo $arr[0]; ?>
    <label for="filename">File Name</label><input type="text" id="filename" name="filename" class="form-control"><br>
    <label for="formFile" class="form-label"> Choose File </label>
    <input class="form-control" type="file" id="file" name="file"><br>
    <button type="submit" id="getInfo" class="btn btn-primary"  name="submit">Send to Server</button>
    <h2>Display File List</h2>
    <?php echo $arr[1]?>
    <li><a target='_blank' href= "$filename".pdf></a></li>
    <div id="result"></div>
       
    </div>
    <script src="public/js/main.js"></script>
    </form>
  </body>
</html>