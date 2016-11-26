<?php
function sendResponseToJSON($response) {
    header('Content-Type: application/json');
    
    try {
     $res = json_encode($response);
    } catch(Exception $e) {
     $res = json_encode(array("error"=>"Invalid response")); 
    }
    
    echo $res;
    die();
}