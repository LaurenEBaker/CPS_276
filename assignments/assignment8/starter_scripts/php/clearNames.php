<?php
require_once "/home/l/e/lebaker/public_html/CPS_276/assignments/assingment8/starter_scripts/classes/Pdo_methods.php";

    $pdo = new PdoMethods();
    $sql = "TRUNCATE TABLE names";
    $stmt = $pdo->otherNotBinded($sql);
    //call $sql
    $data = json_encode($stmt);


    if($data === 'error'){
        $response = (object)[
        'masterstatus'=>'error',
        'resp'=>'There was an error deleteing the names'
    ];
    }
    else {
        $response = (object)[
        'masterstatus'=>'success',
        'msg'=>'All names were deleted'
    ];
}

$output = "{$data}<br>";
$response = (object)[
    'masterstatus'=>'success',
    'msg'=>'All names were deleted'
];
echo json_encode($response);

?>