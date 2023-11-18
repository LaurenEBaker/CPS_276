<?php
require_once "/home/l/e/lebaker/public_html/CPS_276/assignments/assignment9/Pdo_methods.php";


class addNote {
   
        public function init(){
            if(count($_POST) > 0){
                  $note = $_POST['note'];
                  $dateTime = $_DATE['dateTime'];
	
			        // if(isset($_POST['date'])){
				    //     return $this->date();
			        // }

			        // else if(isset($_POST['note'])){
				    //     return $this->addNote();
			        // }
                 }
             }
    public function displayNote($type){
		
        /* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
        $pdo = new PdoMethods();
        
        /* CREATE THE SQL */
        $sql = "SELECT date_time, note FROM notes";
        
        //PROCESS THE SQL AND GET THE RESULTS
        $records = $pdo->selectNotBinded($sql);
        
        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($records == 'error'){
            return 'There has been and error processing your request';
        }
        else {
           return 'no notes found';
        }
    }

    private function addNote(){
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO notes (dateTime, note) VALUES (:date_time, :note)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
            [':date_time',$dateTime,'str'],
			[':note',$note,'str']
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the note';
		}
		else {
			return 'Note has been added';
		}
	}

public function CheckSubmit(){
    if(count($_POST) > 0){
    return [$this->displayNote()];
    }
    else {
    return ["", $this->displayNote()];
    }
}
}