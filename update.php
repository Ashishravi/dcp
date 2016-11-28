<?php

session_start();
require 'crud.php';
include("mpdf/mpdf.php");


        if (isset($_POST['approve_btn'])) {
            //approve action
            
            $id = $_POST['sid'];
            $comment = $_POST['inputComment'];
            
            switch ($_SESSION["sess_userrole"]){
                case "hag": 
                    update_data($_SESSION["sess_userrole"], $id, $comment);
                    break;
                case "acp":
                   generate('docs/acp/form3.html');
                    update_data($_SESSION["sess_userrole"], $id, $comment);
                    break;
                case "admin":
                    update_data($_SESSION["sess_userrole"], $id, $comment);
                    break;
                case "dealing":
                    update_data($_SESSION["sess_userrole"], $id, $comment);
                    break;
                case "iadmin":
                    update_data($_SESSION["sess_userrole"], $id, $comment);
                    break;
                default:
                     header ("Location: index.php");
            }
            
            
        } else if (isset($_POST['deny_btn'])) {
            //deny action
            $id = $_POST['sid'];
            $comment = $_POST['inputComment'];
            
            if ($_SESSION["sess_userrole"]!=null){
                  delete($_SESSION["sess_userrole"], $id, $comment);
            }
                
        } else {
            //no button pressed
        }


function generate($filename){
     $mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
 
                    $mpdf->SetDisplayMode('fullpage');

                    $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list

                    $mpdf->WriteHTML(file_get_contents($filename));

                    $mpdf->Output();
}
    
?>