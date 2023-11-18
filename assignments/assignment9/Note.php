 <?php 
require_once 'addNote.php';
$notes = new addNote();
//$notes = $dt->checkSubmit();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Note</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
 
    </style>
  </head>
  <body>
      <div class="container">
        <h1>Add Note</h1>
        <ul><a target='_blank' href='displayingNote.php'>Display Notes</a></ul>

        <div class="form-group">
          <label for="dateTime">Date and Time</label>
          <input type="datetime-local" name="fn" class="form-control" id="dateTime">
          <label for="dateTime">Note</label>
          <div class="form-floating">
            <textarea class="form-control"  id="note" style="height: 350px"></textarea>
          </div>
        </div>
        <input type="button" id="addNote" class="btn btn-primary" value="Add Note">
       </div>
  </body>
</html>