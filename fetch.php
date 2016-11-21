<?php

function fetch_for_dcp(){
    try {   
    
         require 'database-config.php';

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT applicant_name, pis, rank, relation, hospital_name, hospital_address, police_station_no, si_no, diary_no, ref_hospital_name, a_cghs_category, disease, application_date, amt_asked, amt_granted FROM form LIMIT 10";

        
    
        foreach ($dbh->query($sql) as $row) {
        $sid= $row['pis'];
   
            echo "<div class='container'>
              <div class='panel-group'>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <h4 class='panel-title'>
                      <a data-toggle='collapse' href='#$sid'>$row[applicant_name]</a>
                    </h4>
                  </div>
                  <div id='$sid' class='panel-collapse collapse'>
                    <div class='panel-body'><b>Rank</b> : $row[rank]</div>
                    <div class='panel-body'><b> Mark </b>:  $row[amt_asked]</div>
                  </div>
                </div>
              </div>
            </div>";
            
             }
 

    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

}




?>