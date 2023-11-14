<?php
require_once "/home/l/e/lebaker/public_html/CPS_276/assignments/assingment8/starter_scripts/classes/Pdo_methods.php";


    /* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
    $pdo = new PdoMethods();

    /* CREATE THE SQL */
    $sql = "SELECT name FROM names";
    $records = $pdo->selectNotBinded($sql);

    //loop into a varible
    //throw varrible into object

    $data = json_encode($records);

    /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
    if($records === 'error'){
        $response = (object)[
        'masterstatus'=>'error',
        'resp'=>"There was an error displaying the names"
    ];
    }
    else {
        $response = (object)[
        'masterstatus'=>'success',
        'resp'=>"Names have been displayed"
    ];
}

$output = "{$data}<br>";
$response = (object)[
    'masterstatus'=>'success',
    'resp'=>$output,
    'names'=> $data
];

echo json_encode($response);

?>