<?php
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Credentials: true');

$user = $_GET['id'];

$list = array('name' => 'Anas Jafry', 'mobile' => $user, 'rank' => '3rd');	

echo json_encode($list);
?>