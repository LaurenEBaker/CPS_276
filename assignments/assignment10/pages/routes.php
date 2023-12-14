<?php

$path = "index.php?page=welcome";

//fix this
$status="admin";

if ($status=="admin") {$nav=<<<HTML
    <nav>
    <ul style="list-style-type: none; margin: 0; padding: 0; overflow: hidden;">
            <li style="float: left; margin-right: 20px;"><a href="index.php?page=addContact">Add Contact Information</a></li>
            <li style="float: left; margin-right: 20px;"><a href="index.php?page=deleteContacts">Delete contact(s)</a></li>
            <li style="float: left; margin-right: 20px;"><a href="index.php?page=addAdmin">Add admin</a></li>
            <li style="float: left; margin-right: 20px;"><a href="index.php?page=deleteAdmins">Delete Admin(s)</a></li>
            <li style="float: left; margin-right: 20px;"><a href="index.php?page=logout">Logout</a></li>
        </ul>
</nav>
HTML;
}
else {
    $nav=<<<HTML
    <nav>
    <ul style="list-style-type: none; margin: 0; padding: 0; overflow: hidden;">
        <li style="float: left; margin-right: 20px;"><a href="index.php?page=addContact">Add Contact Information</a></li>
        <li style="float: left; margin-right: 20px;"><a href="index.php?page=deleteContacts">Delete contact(s)</a></li>
        <li style="float: left; margin-right: 20px;"><a href="index.php?page=logout">Logout</a></li>
    </ul>
</nav>
HTML;
}


if(isset($_GET)){
    if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once('pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        //if($this->security()){
            //return $this->displayUsernamePassword();
        //}
        //else {
            require_once('pages/welcome.php');
        $result = init(); //}

    }
    else if($_GET['page'] === "addAdmin"){
        require_once('pages/addAdmin.php');
        //if($this->security()){
            //IF THE ADDADMIN BUTTON IS CLICKED THEN RUN THE ADDADMIN METHOD
           // if(isset($_POST['addAdmin'])){
               // return $this->addAdmin();
           // }
       // }
        $result = init();
    }

    else if($_GET['page'] === "deleteAdmins"){
        require_once('pages/deleteAdmins.php');
        $result = init();

    }
    else if($_GET['page'] === "login"){
        require_once('pages/login.php');
        $result = init();

    }
    else if($_GET['page'] === "logout"){
        require_once('logout.php');
        $result = init();
    }

    else {
        require_once('pages/login.php');
        $result = init();
    }
}

else {
    require_once('pages/login.php');
        $result = init();
}



?>