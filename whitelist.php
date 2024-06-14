<?php
$current_data = file_get_contents("keys.json");
$array_data = json_decode($current_data, true);
$key = $_GET["key"];
if(in_array($key, $array_data)){
    echo "success";
}
else{
    echo "fail";
}
?>
