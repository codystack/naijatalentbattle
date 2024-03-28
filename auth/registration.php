<?php
session_start();

// Connect Database
require_once "config/db.php";

if (isset($_POST['reg_btn'])) {

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
    $talentCategory = $conn->real_escape_string($_POST['talentCategory']);
    $parentsFullName = $conn->real_escape_string($_POST['parentsFullName']);
    $parentEmail = $conn->real_escape_string($_POST['parentEmail']);
    $parentPhone = $conn->real_escape_string($_POST['parentPhone']);
    $parentAddress = $conn->real_escape_string($_POST['parentAddress']);
    $proofOfPayment_path = $conn->real_escape_string('upload/'.$_FILES['link']['name']);
    $accountNumber = $conn->real_escape_string($_POST['accountNumber']);
    $accountName = $conn->real_escape_string($_POST['accountName']);
    $bankName = $conn->real_escape_string($_POST['bankName']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $transaction_ref = 'REF_' . rand(1000, 9999);
    $payment_method = $conn->real_escape_string($_POST['payment_method']);
    $regNumber = 'NTB24-' . rand(1000, 9999);


    if (file_exists($proofOfPayment_path)){
        $proofOfPayment_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['proofOfPayment']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['proofOfPayment']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }

    // Finally, insert details into database
    $query = "INSERT INTO application_form (firstName, lastName, email, phone, age, gender, address, healthCondition, reasonForCondition, stateOfOrigin, occupation, performanceType, stageName, hobbies, talentCategory, parentsFullName, parentEmail, parentPhone, parentAddress, proofOfPayment, accountNumber, accountName, bankName, amount, transaction_ref, payment_method, regNumber) 
                VALUES('$firstName', '$lastName', '$email', '$phone', '$age', '$gender', '$address', '$healthCondition', '$reasonForCondition', '$stateOfOrigin', '$occupation', '$performanceType', '$stageName', '$hobbies', '$talentCategory', '$parentsFullName', '$parentEmail', '$parentPhone', '$parentAddress', '$proofOfPayment_path', '$accountNumber', '$accountName', '$bankName', '$amount', '$transaction_ref', 'Off-line Bank Transfer', '$regNumber')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        //copy image to upload folder
        copy($_FILES['proofOfPayment']['tmp_name'], $proofOfPayment_path);
        
        $_SESSION['regNumber'] = $regNumber;
        echo "<meta http-equiv='refresh' content='0; URL=payment-success?status=success'>";
    }else {
        $_SESSION['message_title']  = "Registration Failed";
        $_SESSION['message']    = "Error occured: ".mysqli_error($conn);
    }
}

    