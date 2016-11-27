<?php


function create() {}

function read(){}

function update($user, $id, $comment){    
    
    if ($user=='hag') $status='I_ADMIN';
    else if ($user=='iadmin') $status='ACP_HEAD';
    else if ($user=='acp') $status='DCP';
    else if ($user=='admin') $status='APPROVED';
    else echo "Invalid User";
    
        try{
        require 'database-config.php';
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comment = comment + " Rejected by $user";

        $sql = "UPDATE form SET status='$status' WHERE app_id=$id";

        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        echo $stmt->rowCount() . " records UPDATED sussesfully by user $user";

        }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
        }
    
    
$conn = null;
}

function delete($user, $id, $comment){
    try{
        require 'database-config.php';
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comment = comment + " Rejected by $user";

        $sql = "UPDATE form SET status='FAILED' WHERE app_id=$id";

        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        echo $stmt->rowCount() . " records UPDATED sussesfully by user $user";

        }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
        }
    
    
$conn = null;
    
}
    

?>