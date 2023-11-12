<?php
echo json_encode("testing");
    private function addName(){
	
		echo "being called";

		$data = json_decode($_POST['data']);
       // $tempArr= explode($data);
        
       // $name = "{$tempArr[1]}, {$tempArr[0]}";
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO names (name) VALUES (:name)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
		$bindings = [
			[':name',$data->name,'str'],
			
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			$response = (object)[
			'masterstatus'=>'error',
			'resp'=>"There was an error entering the name"
		];
		}
		else {
			$response = (object)[
			'masterstatus'=>'success',
			'resp'=>"Name has been added"
		];
	}
	$output = "The first name is {$data->name}<br>";
	$response = (object)[
		'masterstatus'=>'success',
		'resp'=>$output
	];
	
	echo json_encode($response);
	}

?>