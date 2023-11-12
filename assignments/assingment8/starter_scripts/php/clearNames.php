<?php
echo json_encode("clearing");
 function clearNames($post){
    if(isset($post['clearNames'])){
            $pdo = new PdoMethods();
            $sql = "TRUNCATE TABLE FROM names";
    }
}
?>