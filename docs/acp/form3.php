<?php 
$html .= "
<html>
  <head>
   <style>
              .container{
            font-size: 1.5em;
            margin-bottom: 100px;
            margin-top: 10px;
        }
         #no,#date,#sub2,#para1,#para2{
            border-bottom: 1px solid black;
            width:15%;
            display: inline-block;
        }  
        #sub1{
            border-bottom: 1px solid black;
            width:50%;
            display: inline-block;
            margin-left: 11%;
            margin-top: 25px;
        }
        p{
            text-indent: 12%;
            margin-top: 15px;
        }
        #dep{
            margin-left: 120px;
        }
         h3{
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
        }
         #sub2{
            border-bottom: 1px solid black;
            width:22%;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 11%;
            display: block;
        }
      </style>
  </head>
  <body>
      <div class='container'>
     <h3 >OFFICE OF THE DEPUTY COMMISIONER OF POLICE SOUTH EAST DISTRICT,</h3>
          <h3 style='margin-bottom:30px'> IST FLOOR, POLICE STATION SARITA VIHAR, NEW DELHI-110076.</h3>
           <div style='text-align:center'>No. <div id='no'></div>/ Genl. Br. (SED) dated New Delhi, the <div id='date'></div> /2016.</div>
        <div>To</div>
        <div id='dep'>The Deputy Commissioner of Police</div>
        <div id='dep'>General Administration/PHQ, Delhi</div>
          <div style='display:inline-block'>Subject:-</div><div style='margin-left:3.1%;display:inline-block;font-weight:bold'>  Regarding medical re-imbursement claim in respect of</div>
          <div id='sub1'></div><div style='font-weight:bold;display:inline-block'>No.</div>
        <div id='sub2'></div>
        <div>Memo</div>
          <p>
            <div style ='display:inline-block;margin-left:120px'>It is informed that </div><div id='para1'></div> was admitted in <div id='para2'></div> Hospital in emergency. The treatment was taken by the patient in CGHS recognized Hospital on credit basis. Now, the hospital authority has submitted a medical claim (in duplicate) for reimbursement. As per the C.S.M.A. Rules, calculations statement has been prepared which is enclosed herewith. The details of the claim is as under:-
          </p>
    
      <table class='table table-bordered'>
    <tbody>
      <tr>
        <td>Rank, Name & No. of the beneficiary</th>
        <td>Name of Hospital</td>
        <td>Name of disease</td>
        <td>Period of treatment</td>
        <td>Amount claimed</td>
        <td>Amount admissible</td>
      </tr>
      <tr>
        <td>$value[rank]</td>
        <td>$value[applicant_name]</td>
        <td>$value[hospital_name]</td>
        <td>$value[disease]</td>
        <td>date</td>
        <td>$value[amt_asked]</td>
        <td>$value[amt_granted]</td>
      </tr>

    </tbody>
  </table>
    <p>
        It is therefore, requested that necessary ex-past facto permission may kindly be obtained from the component authority and conveyed to this office at an early date. Funds are available under head “01.01.06 Medical Treatment” during the current financial year 2016-17.
    </p>
<div style='text-align:right;font-weight:bold;margin-top:25px;'>ACP/HQ</div>
<div class='row'>
    <div class='col-md-4'>Encls - <strong><u>As Above</u></strong></div>
    <div class='col-md-8' style='text-align:right'>For DY. COMMISIONER OF POLICE</div>
</div>
<div style='text-align:right'>SOUTH EAST DISTRICT, NEW DELHI</div>
</div>
  </body>
</html>";
     
     ?>