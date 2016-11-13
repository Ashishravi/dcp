<?php
require 'database-config.php';

try {
    
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO form (id_no, applicant_name, pis, rank, relation, pincode, startdate, enddate, hospital_name, hospital_address, police_station_no, si_no, diary_no, ref_hospital_name, a_cghs_no, a_cghs_exp, r_cghs_no, r_cghs_exp) 

VALUES ()";

 // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>