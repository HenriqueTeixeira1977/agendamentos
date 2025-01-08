<?php
session_start();
include 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode([]);
    exit;
}

$sql = "SELECT * FROM appointments WHERE client_id=" . $_SESSION['user_id'];
$result = $conn->query($sql);

$appointments = [];
while ($appointment = $result->fetch_assoc()) {
    $appointments[] = $appointment;
}

echo json_encode($appointments);
$conn->close();
?>
