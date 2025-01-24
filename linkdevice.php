<?php
header('Content-Type: application/json');

// Decode the request body
$data = json_decode(file_get_contents('php://input'), true);

// Get the phone number
$phoneNumber = $data['phoneNumber'] ?? null;

if (!$phoneNumber) {
    echo json_encode(['status' => 'error', 'message' => 'Phone number is required.']);
    exit;
}

// Simulate device linking (use API logic here)
$response = [
    'status' => 'success',
    'message' => "Device linked successfully with number: $phoneNumber"
];

echo json_encode($response);
?>
