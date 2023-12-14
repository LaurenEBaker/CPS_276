<?php
require_once "/home/l/e/lebaker/public_html/CPS_276/assignments/assignment9/Pdo_methods.php";


class addNote {

   public function addingNote(){
        $note="";
        $date_time="";
        if(count($_POST) > 0){
            if ($_POST['note']=="" && $_POST['date_time']==""){
                return "No note or date was entered";
            }
            if ($_POST['note']==""){
                return "No note was entered";
            }
            if ($_POST['date_time']==""){
                return "No date was entered";
            }
            $note = $_POST['note'];
            $date_Time = strtotime($_POST['date_time']);
        
		 $pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO notes (date_Time, note) VALUES (:date_time, :note)";


	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
         [':date_time',$date_Time,'int'],
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
    }
       
    public function displayNote(){
        $note="";
        $date_time="";
        $BD="";
        $ED="";

        if(count($_POST) > 0){
            if ($_POST['BD']=="" && $_POST['ED']==""){
                return "No beginning date or ending date was entered";
            }
            if ($_POST['BD']==""){
                return "No beginning date was entered";
            }
            if ($_POST['ED']==""){
                return "No ending date was entered";
            }
            $BD = strtotime($_POST['BD']);
            $ED = strtotime($_POST['ED']);
        }
        /* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
         $pdo = new PdoMethods();
        
         /* CREATE THE SQL */
        $sql = "SELECT date_time, note FROM notes WHERE date_time BETWEEN :BD AND :ED ORDER BY date_time DESC";

        /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
            [':BD',$BD,'int'],
            [':ED',$ED,'int']
           ];
        
        //PROCESS THE SQL AND GET THE RESULTS
         $records = $pdo->selectBinded($sql, $bindings);

         $date_time=date("m\\\j\\\Y h:i A", $date_Time);
        // /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
         if($records == 'error'){
             return 'There has been an error processing your request';
         }
         else {
            return 'no notes found';
         }
        }

    }
