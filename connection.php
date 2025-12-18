<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection (Change credentials accordingly)
        $servername = "localhost";
        //$username = "dualstre_Apex Finance Credit";
        $username = "dginland_apex";
        $password = "dginland_apex";
        //$dbname = "dualstre_Apex Finance Credit";
        $dbname = "56z9Sn6uRMGSrNwtUssk";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // if($conn){
        //     echo "connected successfully";
        // }else{
        //     echo "connection failed";
        // }

        ?> 