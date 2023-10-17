<?php

if(count($_POST) > 0){ 
  require_once 'addName.php'; 
  $AddName = new AddName(); 
  $output = $AddName->ClearName(); 
  } 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Names</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    textarea {
      width: 200px;
      height: 400px;
    }
  </style>
  </head>
  <body>
      <div class="container">
        <h1>Add Names</h1>
        <form action="addName.php" method="post"> 
        <input type="button" name="AddName" class="btn btn-primary" value="Add Name">
        <input type="button" name="ClearNames" class="btn btn-primary" value="Clear Names">
        <div id="errorMsg"></div>
        <div class="form-group">
          <label for="flname">Enter Name</label>
          <input type="text" class="form-control" id="flname">
        </div>
        <div class="form-group">
        <label for="listofnames">List of Names</label>
        <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output ?></textarea>
        </div>
    </div>
    <script src="js/Util.js"></script>
    <script src="js/main.js"></script> 
  </body>
  </form>
</html>