
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>UFile Upload and Display</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/main.css">
  </head>
  <body>
    <div id="wrapper">
      <h1>Upload File</h1>
      <label for="filename">File Name:</label><input type="text" id="filename" name="filename" class="form-control"><br>
      <input type="file" id="file" name="file" class="btn-file"><br>
      <input type="button" id="getInfo" class="btn btn-primary" value="Send to Server">
      <h2>Display File List</h2>
      <div id="result"></div>
    </div>
    <script src="public/js/main.js"></script>

  </body>
</html>