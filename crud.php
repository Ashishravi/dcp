<?php

/*
function create() {}*/

function read_data($id, $row){
    
        require 'database-config.php';
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT app_id, applicant_name, pis, rank, relation, hospital_name, hospital_address, police_station_no, si_no, diary_no, ref_hospital_name, a_cghs_category, disease, application_date, amt_asked, amt_granted FROM form WHERE app_id='$id'";
     /*    
          $stmt = $conn->prepare($sql); 
    $stmt->execute();

    // set the resulting array to associative
    return $stmt->setFetchMode(PDO::FETCH_ASSOC); */
         $stmt = $db->query($sql);
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
         
        
    
    
}

function update_data($user, $id, $comment){    
    
    if ($user=='hag') $status='I_ADMIN';
    else if ($user=='iadmin') $status='ACP';
    else if ($user=='acp') $status='DCP';
    else if ($user=='admin') $status='APPROVED';
    else echo "Invalid User";
    
        try{
        require 'database-config.php';
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE form SET status='$status' WHERE app_id=$id";

        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        //echo $stmt->rowCount() . " records UPDATED sussesfully by user $user"
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