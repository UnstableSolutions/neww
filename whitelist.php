<?php
$current_data = file_get_contents("keys.json");
$array_data = json_decode($current_data, true);
$key = $_GET["key"]; // Assuming key is passed through GET parameter, make sure to validate and sanitize it.
if(in_array($key, $array_data)){
    echo "success";
}
else{
    echo "fail";
}
?>
