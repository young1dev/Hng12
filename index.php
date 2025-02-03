<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
echo json_encode([
    "email" => "fatokunboi@gmail.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"),
    "githhub_url" => "https://github.com/young1dev/HNG12-Stage0.git"
]);

?>
