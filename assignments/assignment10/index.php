<?php

$result="";
//THE COUNT($_POST) IS NOT USED ON THESE PAGES BECAUSE ONLY ONE NEEDS TO CHECK FOR POST INFORMATION AND THAT IS DONE IN THE CLASS
require_once('pages/routes.php');

?>
<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Final Project</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="public/css/main.css" rel="stylesheet">
      </head>
      <body class="container">
		<?php
			/* THIS IS THE PHP PAGE  */
			echo $nav;
			
			/* THE ACKNOWLEDGEMENT GOES HERE AS THE FIRST INDEX OF THE ARRAY  */
			echo $result[0]; 

			/* THE FORM GOES HERE.  LOOK AT THE FORM.PHP PAGE TO SEE HOW THE RETURN IN DONE. */
			echo $result[1]; 
		?>
	</body>
</html> 

