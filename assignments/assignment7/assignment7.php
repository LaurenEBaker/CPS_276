<?php
$output= "There are no files to display";

if(count($_POST) > 0){ 
  require_once 'pdo.php';
  $output= new Pdo();
}
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
  <form method="post" action="assignment7.php"> 
    <div class="container">
      <h1>Upload File</h1>
      <label for="filename">File Name:</label><input type="text" id="filename" name="filename" class="form-control"><br>
      <input type="file" id="file" name="file" class="btn-file"><br>
      <button type="submit" id="getInfo" class="btn btn-primary" name="submit">Send to Server</button>
      <h2>Display File List</h2>
      <p><?php echo $output ?></p>
      <div id="result"></div>
       
    </div>
    <script src="public/js/main.js"></script>
    </form>
  </body>
</html>