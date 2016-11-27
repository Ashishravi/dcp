<?php
session_start();
if($_SESSION["sess_userrole"]!="dealing"){
    header ("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical Claim</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    .col-md-4,.col-md-8{
        margin-top: 10px;
        margin-bottom: 10px;
    }
   .heading{
    text-align: center;
       color:white;
       background-color:black;
padding:20px 0px 20px 0px;
border-radius:10px;
    }
h3{
  text-align:center;
}
    .bt{
        margin-bottom: 20px;
        margin-top: 20px;
    text-align: center}
</style>    
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
            <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Delhi Police</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="dealinghome.php">Status </a></li>
        <li><a href="refChecklist.php">Referral</a></li>
        <li class="active"><a href="#">Emergency<span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['sess_username'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      
     <div class="container">
         <h3>FILL THE CLAIM DETAILS AND THE DOCUMENTS SUBMITTED</h3>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <label  class="col-md-4" for="applicantName">Enter Applicant's full name:</label>
            <div class="col-md-8"> <input type="text" id="applicantName" name="applicantName" placeholder="Applicant Name" /></div>
            <label class="col-md-4" for="idNo">Enter the Identity No:</label>
            <div class="col-md-8"><input type="text" id="idNo" name="idNo" placeholder="Identity No" /></div>
            <label class="col-md-4" for="pis">Enter PIS No:</label>
            <div class="col-md-8"><input type="number" id="pis" name="pis" placeholder="PIS No"/></div>
            <label class="col-md-4" for="rank">Enter rank:</label>
            <div class="col-md-8"><input type="text" id="rank" name="rank" placeholder="Rank"/></div>
            <label class="col-md-4" for="relation">Enter relation with the CGHS holder:</label>
            <div class="col-md-8"><input type="text" id="relation" name="relation" placeholder="Relation" /></div>
            <label class="col-md-4" for="pincode">Enter Pincode:</label>
            <div class="col-md-8"><input type="number" id="pincode" name="pincode" placeholder="Pincode" /></div>
            <label class="col-md-4" for="startDate">Enter the starting date of treatment:</label>
            <div class="col-md-8"><input type="date" id="startDate" name="startDate" /></div>
            <label class="col-md-4" for="endDate">Enter the last date of treatment:</label>
            <div class="col-md-8"><input type="date" id="endDate" name="endDate" /></div>
            <label class="col-md-4" for="hospitalName">Enter the Hospital Name:</label>
            <div class="col-md-8"><input type="text" id="hospitalName" name="hospitalName" placeholder="Hospital Name" /></div>
            <label class="col-md-4" for="hospitalAddress">Enter the Hospital Address:</label>
            <div class="col-md-8"><textarea id="hospitalAddress" name="hospitalAddress" placeholder="Hospital Address"></textarea></div>
            <label class="col-md-4" for="policestationNo">Enter the Police Station No:</label>
            <div class="col-md-8"><input type="number" id="policestationNo" name="policestationNo" placeholder="Police Station No" /></div>
            <label class="col-md-4" for="siNo">Enter SI No:</label>
            <div class="col-md-8"><input type="text" id="siNo" name="siNo" placeholder="SI No" /></div>
            <label class="col-md-4" for="diaryNo">Enter Diary No:</label>
            <div class="col-md-8"><input type="text" id="diaryNo" name="diaryNo" placeholder="Diary No" /></div>
            <label class="col-md-4" for="refHospitalname">Enter Referred Hospital Name:</label>
            <div class="col-md-8"><input type="text" id="refHospitalname" name="refHospitalname" placeholder="Referred Hospital Name" /></div>
            <label class="col-md-4" for="appCGHSno">Enter the CGHS No of Applicant:</label>
            <div class="col-md-8"><input type="number" id="appCGHSno" name="appCGHSno" placeholder="Applicant CGHS Number" /></div>
            <label class="col-md-4" for="appCGHSexp">Enter the expiry date of CGHS card</label>
            <div class="col-md-8"><input type="date" id="appCGHSexp" name="appCGHSexp" /></div>
            <label class="col-md-4" for="refCGHSno">Enter the CGHS No of Dependent:</label>
            <div class="col-md-8"><input type="number" id="refCGHSno" name="refCGHSno" placeholder="Dependent CGHS Number" /></div>
            <label class="col-md-4" for="refCGHSexp">Enter the expiry date of CGHS card</label>
            <div class="col-md-8"><input type="date" id="refCGHSexp" name="refCGHSexp" /></div>
            <label class="col-md-4" for="appCGHScategory">Enter the category of CGHS Applicant:</label>
            <div class="col-md-8"><input type="text" id="appCGHScategory" name="appCGHScategory" placeholder="CGHS Applicant Category" /></div>
            <label class="col-md-4" for="disease">Enter the disease of the patient:</label>
            <div class="col-md-8"><input type="text" id="disease" name="disease" placeholder="Disease" /></div>
            <label class="col-md-4" for="applicationDate">Enter the date of application:</label>
            <div class="col-md-8"><input type="date" id="applicationDate" name="applicationDate" /></div>
            <label class="col-md-4" for="amtAsked">Enter the amount requested in claim:</label>
            <div class="col-md-8"><input type="number" id="amtAsked" name="amtAsked" placeholder="Amount Asked" /></div>
            <label class="col-md-4" for="amtGranted">Enter the amount granted in claim:</label>
            <div class="col-md-8"><input type="number" id="amtGranted" name="amtGranted" placeholder="Amount Granted" /></div>
            <label class="col-md-4" for="amtAvailable">Enter the amount avaliable:</label>
            <div class="col-md-8"><input type="number" id="amtAvailable" name="amtAvailable" placeholder="Amount Available" /></div>
            <h3>Checklist of documents required</h3>
            <div class="row"><div class="col-md-4">ID Card</div><div class="col-md-4"><input type="text" name="ID Card" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">CGHS Card</div><div class="col-md-4"><input type="text" name="CGHS Card" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Dependent Certificate</div><div class="col-md-4"><input type="text" name="Dependent Certificate" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Prescription Slip</div><div class="col-md-4"><input type="text" name="Prescription Slip" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Original Bill</div><div class="col-md-4"><input type="text" name="Original Bill" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Medical Bill</div><div class="col-md-4"><input type="text" name="Medical Bill" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Main Bill Break-up</div><div class="col-md-4"><input type="text" name="Main Bill Break-up" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Discharge Summary</div><div class="col-md-4"><input type="text" name="Discharge Summary" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Lab Report</div><div class="col-md-4"><input type="text" name="Lab Report" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Duplicate Medical</div><div class="col-md-4"><input type="text" name="Duplicate Medical" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Reason for Late Submission</div><div class="col-md-4"><input type="text" name="Reason for Late Submission" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Death Certificate</div><div class="col-md-4"><input type="text" name="Death Certificate" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Photocopy of Medical</div><div class="col-md-4"><input type="text" name="disease" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">MRC Form</div><div class="col-md-4"><input type="text" name="MRC Form" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Emergency Certificate</div><div class="col-md-4"><input type="text" name="Emergency Certificate" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="row"><div class="col-md-4">Reason for Non-govt. Hospital</div><div class="col-md-4"><input type="text" name="Reason for Non-govt. Hospital" placeholder="Page No." /></div><div class="col-md-4"><input type="checkbox"></div> </div>
            <div class="bt"><input type="submit" class="btn btn-info" value="SUBMIT" />
      </form>
    </div>
  </body>
</html>