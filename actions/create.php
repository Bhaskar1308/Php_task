<?php
include '../db.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$role = $_POST['role'];
$designation = $_POST['designation'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$photo = '';

// Handle file upload
if (!empty($_FILES['photo']['name'])) {
    $photo = time() . '_' . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/$photo");
}

$stmt = $conn->prepare("INSERT INTO people (name, mobile, email, address, role, designation, gender, photo, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");

$stmt->bind_param("sssssssss", $name, $mobile, $email, $address, $role, $designation, $gender, $photo, $status);

if ($stmt->execute()) {
    echo "success";
} else {
    http_response_code(500);
    echo "Error: " . $stmt->error;
}
