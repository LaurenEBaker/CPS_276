
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv = "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Calculator Exercise</title>
</head>
<body class="container">
    <p> <?php require_once "Calculator.php"; 
$Calculator = new Calculator(); 
echo $Calculator->calc("/", 10, 0);
echo $Calculator->calc("*", 10, 2);
echo $Calculator->calc("/", 10, 2); 
echo $Calculator->calc("-", 10, 2); 
echo $Calculator->calc("+", 10, 2); 
echo $Calculator->calc("*", 10);
echo $Calculator->calc(10);  ?><p>
  
</body>
</html>