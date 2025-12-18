<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection (Change credentials accordingly)
        $servername = "localhost";
        //$username = "dualstre_Apex Finance Credit";
        $username = "dginland_apexfinance";
        $password = "dginland_apexfinance";
        //$dbname = "dualstre_Apex Finance Credit";
        $dbname = "rtxwb3TJqT4YkN9JLjav";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // if($conn){
        //     echo "connected successfully";
        // }else{
        //     echo "connection failed";
        // }

        ?> 