<?php
require_once "/home/l/e/lebaker/public_html/CPS_276/assignments/assingment8/starter_scripts/classes/Pdo_methods.php";


		$data = json_decode($_POST['data'],true);
		$newname= $data['name'];
		$tempArr= explode(" ",$newname);
		$name = "{$tempArr[1]}, {$tempArr[0]}";

		//print_r($name);

		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO names (name) VALUES (:name)";
	 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
		$bindings = [
			[':name',$name,'str']
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			$response = (object)[
			'masterstatus'=>'error',
			'msg'=>'There was an error entering the name'
		];
		}
		else {
			$response = (object)[
			'masterstatus'=>'success',
			'msg'=>'Name has been added'
		];
	}

	$output = "{$name}<br>";
	$response = (object)[
		'masterstatus'=>'success',
		'msg'=>'Name has been added'
	];
	
	echo json_encode($response);


?>