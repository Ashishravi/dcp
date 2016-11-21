<?php
require 'database-config.php';


$appName = $_POST['applicantName'];
$pis = $_POST['pis'];
$rank = $_POST['rank'];
$relation = $_POST['relation'];
$pincode = $_POST['pincode'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$hospitalName = $_POST['hospitalName'];
$hospitalAddress = $_POST['hospitalAddress'];
$policestationNo = $_POST['policestationNo'];
$siNo = $_POST['siNo'];
$diaryNo = $_POST['diaryNo'];
$refHospitalname = $_POST['refHospitalname'];
$appCGHSno = $_POST['appCGHSno'];
$appCGHSexp = $_POST['appCGHSexp'];
$refCGHSno = $_POST['refCGHSno'];
$refCGHSexp = $_POST['refCGHSexp'];
$appCGHScategory = $_POST['appCGHScategory'];
$disease = "disease";//$_POST['disease'];
$applicationDate = $_POST['applicationDate'];
$amtAsked = $_POST['amtAsked'];
$amtGranted = $_POST['amtGranted'];
$amtAvailable = $_POST['amtAvailable'];

try {
    
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO form (applicant_name, pis, rank, relation, pincode, startdate, enddate, hospital_name, hospital_address, police_station_no, si_no, diary_no, ref_hospital_name, a_cghs_no, a_cghs_exp, r_cghs_no, r_cghs_exp, a_cghs_category, disease, application_date, amt_asked, amt_granted, amt_available) 

VALUES ('$appName', $pis, '$rank', '$relation', $pincode, $startDate, $endDate, '$hospitalName', '$hospitalAddress', $policestationNo, $siNo, $diaryNo, '$refHospitalname', $appCGHSno, $appCGHSexp,$refCGHSno, $refCGHSexp, '$appCGHScategory', '$disease', $applicationDate, $amtAsked, $amtGranted, $amtAvailable)";

 // use exec() because no results are returned
    $dbh->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;





?>