<?php
$query_for="";
function fetch_for_dcp(){
    $query_for="DCP";
    get_query($query_for);

}

function fetch_for_d_hand(){
    $query_for="DCP";
    get_query($query_for);

}

function fetch_for_hag(){
    $query_for="HAG";
    get_query($query_for);

}

function fetch_for_acp(){
    $query_for="ACP";
    get_query($query_for);

}

function fetch_for_iadmin(){
    $query_for="I_ADMIN";
    get_query($query_for);

}

function get_query($for) {
    
    try {   
    
         require 'database-config.php';

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT app_id, applicant_name, pis, rank, relation, hospital_name, hospital_address, police_station_no, si_no, diary_no, ref_hospital_name, a_cghs_category, disease, application_date, amt_asked, amt_granted FROM form WHERE status='$for' LIMIT 10";

        
    
               foreach ($dbh->query($sql) as $row) {
        $sid= $row['app_id'];
   
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
                    <div class='panel-body'><b> Relation </b>:  $row[relation]</div>
                    <div class='panel-body'><b> Hospital Name </b>:  $row[hospital_name]</div>
                    <div class='panel-body'><b> Police Station No. </b>:  $row[police_station_no]</div>
                    <div class='panel-body'><b>SI No </b> : $row[si_no]</div>
                    <div class='panel-body'><b>Diary No </b> : $row[diary_no]</div>
                    <div class='panel-body'><b> CGHS Category </b>:  $row[a_cghs_category]</div>
                    <div class='panel-body'><b> Disease </b>:  $row[disease]</div>
                    <div class='panel-body'><b> Applicate Date </b>:  $row[application_date]</div>
                    <div class='panel-body'><b> Mark </b>:  $row[amt_asked]</div>
                  
                  <form class='form-horizontal panel-body' role='form' method='POST' action='update.php'>
                    <div class='form-group' >
                    <label for='inputComment' class='col-sm-3 control-label'>Comments</label>
                    <div class='col-sm-9'>
                        <input type='text' class='form-control' id='inputComment' name='inputComment' placeholder='Comment' />
                    </div>
                  </div>
                  <input type='hidden' name='sid' value='$sid'>
                            <div class='form-group panel-body'>
                                <button type='submit' name='approve_btn' class='btn btn-success'>Approve</button>
                                <button type='submit' name='deny_btn' class='btn btn-danger'>Deny</button>
                            </div>
                          </form>
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