<?php
header('Content-Type: application/json');

$authorization_header = getallheaders()['Authorization'];
$token = str_replace('Bearer ', '', $authorization_header);

if ($token !== 'your-expected-token') {
    http_response_code(401); // Unauthorized
    echo json_encode(['error' => 'Invalid token']);
    exit();
}

// Your API logic here
$response = [
    'status' => 'success',
    'data' => 'Your protected resource data here'
];

echo json_encode($response);
?>
