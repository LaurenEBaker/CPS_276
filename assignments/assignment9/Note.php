 <?php 
require_once 'addNote.php';
$note = new addNote();
$notes = $note->addingNote();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Add Note</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/main.css">
  
  </head>
  <body>
  <form method="post" enctype="multipart/form-data" action="Note.php"> 
      <div class="container">
        <h1>Add Note </h1>
        <?php echo $notes; ?><br>
        <ul><a target='_blank' href='displayingNote.php'>Display Notes</a></ul>


        <div class="form-group">
          <label for="date_time">Date and Time</label>
          <input type="datetime-local" name="date_time" class="form-control" id="date_time">
          <label for="note">Note</label>
          <div class="form-floating">
            <textarea class="form-control"  name="note" id="note" style="height: 350px"></textarea>
        </div>
        </div>
        <input type="submit" name="submit" id="addNote" class="btn btn-primary" value="Add Note">
       </div>
  </body>
</html>