<?php

$token = $_POST['token'];
if ($token != 'CHANGE_ME') {
    http_response_code(401);
    die('Ttttt...');
}

$user = $_POST['user_name'];
$message = max(0, intval($_POST['text']));
$max = $message ?: 20;
$roll = mt_rand(1, $max);

header('Content-Type: application/json');
echo json_encode([
    'response_type' => 'in_channel',
    'text' => "$user rolled $roll out of $max!",
]);
