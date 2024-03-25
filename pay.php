<?php
// Connect Database
require_once "config/db.php";


$firstName = $conn->real_escape_string($_POST['firstName']);
$lastName = $conn->real_escape_string($_POST['lastName']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$age = $conn->real_escape_string($_POST['age']);
$gender = $conn->real_escape_string($_POST['gender']);
$address = $conn->real_escape_string($_POST['address']);
$healthCondition = $conn->real_escape_string($_POST['healthCondition']);
$reasonForCondition = $conn->real_escape_string($_POST['reasonForCondition']);
$stateOfOrigin = $conn->real_escape_string($_POST['stateOfOrigin']);
$occupation = $conn->real_escape_string($_POST['occupation']);
$performanceType = $conn->real_escape_string($_POST['performanceType']);
$stageName = $conn->real_escape_string($_POST['stageName']);
$hobbies = $conn->real_escape_string($_POST['hobbies']);
$parentsFullName = $conn->real_escape_string($_POST['parentsFullName']);
$parentEmail = $conn->real_escape_string($_POST['parentEmail']);
$parentPhone = $conn->real_escape_string($_POST['parentPhone']);
$parentAddress = $conn->real_escape_string($_POST['parentAddress']);
$amount = $conn->real_escape_string($_POST['amount']);
$transaction_id = $conn->real_escape_string($_POST['transaction_id']);
$reference = $conn->real_escape_string($_POST['reference']);
$regNumber = 'NTB3'.rand(1000, 9999);


// Finally, insert details into database
$query = "INSERT INTO application_form (firstName, lastName, email, phone, age, gender address, healthCondition, reasonForCondition, stateOfOrigin, occupation, performanceType, stageName, hobbies, parentsFullName, parentEmail, parentPhone, parentAddress, amount, transaction_id, reference, regNumber) 
            VALUES('$firstName', '$lastName', '$email', '$phone', '$age', '$gender', '$address', '$healthCondition', '$reasonForCondition', '$stateOfOrigin', '$occupation', '$performanceType', '$stageName', '$hobbies', '$parentsFullName', '$parentEmail', '$parentPhone', '$parentAddress', '$amount', '$transaction_id', '$reference', '$regNumber')";


mysqli_query($conn, $query);
if (mysqli_affected_rows($conn) > 0) {
    $_SESSION['success_message_title']  = "Registration Successful👋";
    $_SESSION['success_message']    = "You're being redirected";
    $_SESSION['regNumber'] = $regNumber;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['email'] = $email;
    $_SESSION['stageName'] = $stageName;
}else {
    $_SESSION['message_title']  = "Registration Failed";
    $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
}