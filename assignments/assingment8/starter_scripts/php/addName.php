<?php

    private function addName(){
        
        $nameArr=[];
        
        $tempArr= explode(" ",$_POST['data']);
        
        print_r($tempArr);
        
        $name = "{$tempArr[1]}, {$tempArr[0]}";
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO names (name) VALUES (:name)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			[':name',$_POST['name'],'str'],
			
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the name';
		}
		else {
			return 'Name has been added';
		}
	}

?>