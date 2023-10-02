<?php
function myFun() {
  
for ($r = 1; $r <= 15; $r++){ 
    for ($c = 1; $c <=5; $c++){ 
   echo" row ".$r." cell ".$c."\n"; 
    if ($c==5) {
      echo "<br>";
    }
    
    } 
    } 
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv = "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>exercise 1</title>
</head>
    <h1>   </h1>
   
<table class=" container text-center table table-bordered ">
  <tbody>
  
    <tr>
      <td> <?php echo myFun(); ?></td>
      
    </tr>
  </tbody>
</table>

</body>
</html>