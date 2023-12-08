<?php
header('Access-Control-Allow-Origin: *');

$data = ["message" => "message from php"];

echo json_encode($data);
