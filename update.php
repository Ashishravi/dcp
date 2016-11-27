<?php

session_start();
require 'crud.php';


        if (isset($_POST['approve_btn'])) {
            //approve action
            
            $id = $_POST['sid'];
            $comment = $_POST['inputComment'];
            
            switch ($_SESSION["sess_userrole"]){
                case "hag":
                    update($_SESSION["sess_userrole"], $id, $comment);
                    break;
                case "acp":
                    echo "acp approval";
                    break;
                case "admin":
                     update($_SESSION["sess_userrole"], $id, $comment);
                    break;
                case "dealing":
                    echo "dealing approval";
                    break;
                case "iadmin":
                    echo "iadmin approval";
                    break;
                default:
                     header ("Location: index.php");
            }
            
            
        } else if (isset($_POST['deny_btn'])) {
            //deny action
            $id = $_POST['sid'];
            $comment = $_POST['inputComment'];
            
            switch ($_SESSION["sess_userrole"]){
                case "hag":
                    delete($_SESSION["sess_userrole"], $id, $comment);
                    break;
                case "acp":
                    echo "acp approval";
                    break;
                case "admin":
                    echo "dcp approval";
                    break;
                case "dealing":
                    echo "dealing approval";
                    break;
                case "iadmin":
                    echo "iadmin approval";
                    break;
                default:
                     header ("Location: index.php");
            }
        } else {
            //no button pressed
        }
    
?>