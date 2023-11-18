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
    <title>Display Notes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      #msg {
        margin: 10px 0 0 0;
      }
    </style>
  </head>
  <body>
      <div class="container">
        <h1>Display Note</h1>
        <ul><a target='_blank' href="Note.php">Add Note</a></ul>

        <div class="form-group">
          <label for="dateTime">Beginning Date</label>
          <input type="datetime-local" name="BD" class="form-control" id="begTime"> <br>
          <label for="dateTime">Ending Date</label>
          <input type="datetime-local" name="ED" class="form-control" id="endTime"><br>
          <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Date and Time</th>
                  <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"> </th>
                <td></td>
                
          </table>
        </div>
        <input type="button" id="addNote" class="btn btn-primary" value="Get Notes">
       </div>
  </body>
</html>