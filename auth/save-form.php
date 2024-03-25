<?php
// Connect Database
require_once "config/db.php";

// Get form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$address = $_POST['address'];
$healthCondition = $_POST['healthCondition'];
$reasonForCondition = $_POST['reasonForCondition'];
$stateOfOrigin = $_POST['stateOfOrigin'];
$occupation = $_POST['occupation'];
$performanceType = $_POST['performanceType'];
$stageName = $_POST['stageName'];
$hobbies = $_POST['hobbies'];
$parentsFullName = $_POST['parentsFullName'];
$parentEmail = $_POST['parentEmail'];
$parentPhone = $_POST['parentPhone'];
$parentAddress = $_POST['parentAddress'];
$amount = $_POST['amount'];
$reference = $_POST['reference'];

// Save form data to MySQL database
$sql = "INSERT INTO application_form (firstName, lastName, email, phone, age, address, healthCondition, reasonForCondition, stateOfOrigin, occupation, performanceType, stageName, hobbies, parentsFullName, parentEmail, parentPhone, parentAddress, amount, reference) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssssssss", $firstName, $lastName, $email, $phone, $age, $address, $healthCondition, $reasonForCondition, $stateOfOrigin, $occupation, $performanceType, $stageName, $hobbies, $parentsFullName, $parentEmail, $parentPhone, $parentAddress, $amount, $reference);
$stmt->execute();

// Close MySQL connection
$stmt->close();
$conn->close();

// Return success message
// echo json_encode(['success' => true]);
?>