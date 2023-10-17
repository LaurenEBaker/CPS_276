<?php
$AddName="";
$ClearName="";
$output = "";

if(isset($_POST['AddName'])){
    foreach ( $_POST["AddName"] as $name ) {
        $AddName .= $name . "\n";
    }
}


if(isset($_POST['ClearName'])){
    foreach ( $_POST["ClearName"] as $name ) {
        $ClearName .= "";
        $AddName == "";
    }
}
$output = <<<HTML
<dl>
<dt></dt><dd>{$_POST["AddName"]}</dd>

</dl>

HTML;

?>