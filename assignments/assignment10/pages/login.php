<?php
require_once 'classes/Pdo_methods.php';
class Login extends PdoMethods {

	public function init($page) {
		if($page == "index"){
			if(isset($_POST['login'])){
				return $this->login();
			}
		}
	
		else{
			echo "error";
		}
	}

	//BECAUSE THE HOME, ADDADMIN, AND LOGOUT PAGES ARE BY ACCESS ONLY WE HAVE TO RUN THE SECURITY SCRIPT FIRST.
	private function security(){
		session_start();
		if($_SESSION['access'] !== "accessGranted"){
		  header('location: index.php');
		}
		else {
			return true;
		}
		
	}
	
	private function login(){
	   
	    $pdo = new PdoMethods();
	    $sql = "SELECT email, password FROM admins WHERE email = :email";
		
		$bindings = [
			[':email', $_POST['email'], 'str']
		];
		
		$records = $pdo->selectBinded($sql, $bindings);

		/** IF THERE WAS AN RETURN ERROR STRING */
		if($records == 'error'){
			return "There was an error logging it";
		}
		
		else{
			if(count($records) != 0){
	            /** IF THE PASSWORD IS NOT VERIFIED USING PASSWORD_VERIFY THEN RETURN FAILED, OTHERWISE RETURN SUCCESS, IF NO RECORDS ARE FOUND RETURN NO RECORDS FOUND. */
	            if(/**password_verify**/($_POST['password'] = $records[0]['password'])){
	                session_start();
	                $_SESSION['access'] = "accessGranted";
					$_SESSION['Status'] = "Admin";
	                header("location: welcome.php");
	            }
	            else {
	                return "There was a problem logging in with those credentials";
	            }
			}
			else {
				return "There was a problem logging in with those credentials";
			}
		}
	}


	private function displayUsernamePassword(){
		$pdo = new PdoMethods();
		$sql = "SELECT email, password FROM admins";
		$records = $pdo->selectNotBinded($sql);
		$result = '';

		/* IF THERE WAS AN ERROR DISPLAY MESSAGE*/
		if($records == 'error'){
		    return 'There has been and error processing this request';
		}

		/** IF EMAILS AND PASSWORDS ARE FOUND DISPLAY THEM OTHERWISE DISPLAY NO RECORDS FOUND MESSAGE */
		else{
		    if(count($records) != 0){
		        $result = "<ul>";
		        foreach($records as $row){
		            $result .= "<li>{$row['email']} -- {$row['password']}</li>";
		        }
		        $result .= "</ul>";

		        return $result;
		    }
		    else {
		        return "No records found";
		    }
		}
	}

 	public function getForm($acknowledgement, $elementsArr){

 	global $stickyForm;
 	$options = $stickyForm->createOptions($elementsArr['state']);
		
		/* THIS IS A HEREDOC STRING WHICH CREATES THE FORM AND ADD THE APPROPRIATE VALUES AND ERROR MESSAGES */
	 $form = <<<HTML
	 <form method="post" action="index.php?page=login">
     <div class="container">
       <h1>Login Page</h1>
       <p>Enter username and password</p>
       <p>For test purposes the username is "lebaker@Admin.com" the password is "password"</p>
      <p><?php echo $output ?></p>

                <label for="user" class="form-label">Email address</label>
                <input type="text" class="form-control" id="user" name="user" value="<?=$user?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?=$password?>" id="password">
            </div>
        <input type="submit" name="submitButton" class="btn btn-primary"></input> 
        <br><br>
        <font color="darkred"><?=$errorMsg?></font>
        </div>
    </form>
HTML;
   return [$acknowledgement, $form];
 
}
}
?>