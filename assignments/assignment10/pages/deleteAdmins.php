<?php
function init(){

    require_once 'classes/Pdo_methods.php';
    require_once 'routes.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // if ($_SESSION['Status'] == 'Staff'){
    //     header("Location: index.php?page=logout");
    //     unset($_SESSION['index']);
    // }


    if(isset($_POST['delete'])){
        if(isset($_POST['chkbx'])){
            $error = false;
            foreach($_POST['chkbx'] as $id){
                $pdo = new PdoMethods();

                $sql = "DELETE FROM admins WHERE name=:name";
                
                $bindings = [
                    [':name', $id, 'str'],
                ];


                $result = $pdo->otherBinded($sql, $bindings);

                if($result === 'error'){
                    $error = true;
                    break;
                }
            }
        }
    }
    
    $output = "<h1>Delete Admin(s)</h1>";
    
    $pdo = new PdoMethods();

    /* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
    $sql = "SELECT * FROM admins";

    $records = $pdo->selectNotBinded($sql);

    if(count($records) === 0){
        $output .= "<p>There are no records to display</p>";
        return [$output,""];
    }
    else {
        $output .= "<form method='post' action='index.php?page=deleteAdmins'>";
        $output .= "<input type='submit' class='btn btn-danger' name='delete' value='Delete'/><br><br><table class='table table-striped table-bordered'>
    <thead>
        <tr>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>status</th>
        <th>Delete</th>
        </tr>
    </thead><tbody>";

    foreach($records as $row){
        $output .= "<tr><td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['password']}</td>
        <td>{$row['Status']}</td>
        <td><input type='checkbox' name='chkbx[]' value='{$row['name']}' /></td></tr>";
    }

    $output .= "</tbody></table></form>";

    if(isset($error)){
        if($error){
            $msg = "<p>Could not delete the Admin(s)</p>";
        }
        else {
            $msg = "<p>Admin(s) deleted</p>";
        }
    }
    else {
        $msg="";
    }
    return [$msg, $output];
    }
}