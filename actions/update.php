<?php
include '../db.php';

$id = (int) $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$role = $_POST['role'];
$designation = $_POST['designation'];
$gender = $_POST['gender'];
$status = $_POST['status'];

$setPhoto = '';
if (!empty($_FILES['photo']['name'])) {
    $photo = time() . '_' . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/$photo");
    $setPhoto = ", photo = '$photo'";
}

$sql = "UPDATE people SET 
        name = '$name',
        mobile = '$mobile',
        email = '$email',
        address = '$address',
        role = '$role',
        designation = '$designation',
        gender = '$gender',
        status = '$status'
        $setPhoto,
        updated_at = NOW()
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    http_response_code(500);
    echo "Error: " . $conn->error;
}
