<?php
    $dbname="nxp9797";
    $localhost="127.0.0.1";
    $uname = "root";
    $password=" ";
    try{
        $db = new PDO("mysql:host=$localhost;dbname=$dbname;port=3306",$uname,$password);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (Exception $e){
        echo "Unable to connect";
        echo $e -> getMessage();
        exit;
    }
    //connection for about.php
    try{
        $board = $db->query("SELECT tName, tLocation, tImage FROM teams WHERE tBoard = 'Board of Directors'");
        $multiTeam = $db->query("SELECT tName, tLocation, tImage FROM teams WHERE tBoard = 'MultiDisciplinary Board'");
    }catch(Exception $e){
        echo "Unable to retrieve results";
        echo $e;
        exit;
    }

    
   
    
    
?>