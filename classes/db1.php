<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rcc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getEventTypes(){
    GLOBAL $conn;
    try{
        $q = "SELECT * FROM event_type";
    
        $res = $conn->query($q);
        $s = $res->fetch_all();
        // var_dump($s[0]);
        // if($res){
        //     $lst = $conn->fetch_all($res);
        //     var_dump($lst);
        // }
        return $s;
    }
    catch(Exception $e){
        return NULL;
    }

}

function getEvent_FromId($id){
    GLOBAL $conn;
    try{
        $q = "SELECT * FROM events where type_id = ".$id;
    
        $res = $conn->query($q);
        $s = $res->fetch_all();
        // var_dump($s[0]);
        // if($res){
        //     $lst = $conn->fetch_all($res);
        //     var_dump($lst);
        // }
        return $s;
    }
    catch(Exception $e){
        return NULL;
    }
}