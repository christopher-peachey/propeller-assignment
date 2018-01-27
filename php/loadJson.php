<?php
//JSON directory
$dir = "../JSON_data/";

$string = file_get_contents($dir."accordian-json.json");
$json = json_decode($string, true);

//Log error
if($json == null){
	file_put_contents("../logs/json_log.txt", json_last_error_msg()."\r\n", FILE_APPEND | LOCK_EX);	
}

echo json_encode($json, true);
?>