<?php
header('Content-Type: application/json');

// Decode the request body
$data = json_decode(file_get_contents('php://input'), true);

// Get phone number and message
$phoneNumber = $data['phoneNumber'] ?? null;
$message = $data['message'] ?? null;

if (!$phoneNumber || !$message) {
    echo json_encode(['status' => 'error', 'message' => 'Phone number and message are required.']);
    exit;
}

// Simulate sending message (use WhatsApp Business API here)
$response = [
    'status' => 'success',
    'message' => "Message sent successfully to $phoneNumber"
];

echo json_encode($response);
?>
