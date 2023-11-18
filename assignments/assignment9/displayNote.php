<?php
require_once "/home/l/e/lebaker/public_html/CPS_276/assignments/assignment9/Pdo_methods.php";


    /* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
    $pdo = new PdoMethods();

    /* CREATE THE SQL */
    $sql = "SELECT date_time, note FROM notes WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC";
    $records = $pdo->selectNotBinded($sql);

    //loop into a varible
    //throw varrible into object

    $data = json_encode($records);

    /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
    if($records === 'error'){
        $response = (object)[
        'masterstatus'=>'error',
        'resp'=>"There was an error displaying the notes"
    ];
    }
    else {
        $response = (object)[
        'masterstatus'=>'success',
        'resp'=>"Notes are being displayed"
    ];
}

$output = "{$data}<br>";
$response = (object)[
    'masterstatus'=>'success',
    'resp'=>$output,
    'notes'=> $data
];

echo json_encode($response);

?>