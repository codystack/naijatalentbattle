<?php
    session_start();

    $ref = $_GET['reference']; 
    if ($ref == "") {
        header("Location:javascript://history.go(-1)");
    }
?>

<?php
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_b52a88508841814f8f95fd69f10525fec90fd999",
        "Cache-Control: no-cache",
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // echo $response;
        $result = json_decode($response);
    }

    if ($result->data->status == 'success') {
 
        $firstName = $result->data->customer->first_name;
        $lastName = $result->data->customer->last_name;
        $email = $result->data->customer->email;
        $phone  = $result->data->metadata->custom_fields[0]->value;
        $age = $result->data->metadata->custom_fields[1]->value;
        $gender = $result->data->metadata->custom_fields[2]->value;
        $address = $result->data->metadata->custom_fields[3]->value;
        $healthCondition = $result->data->metadata->custom_fields[4]->value;
        $reasonForCondition = $result->data->metadata->custom_fields[5]->value;
        $stateOfOrigin = $result->data->metadata->custom_fields[6]->value;
        $occupation = $result->data->metadata->custom_fields[7]->value;
        $performanceType = $result->data->metadata->custom_fields[8]->value;
        $stageName = $result->data->metadata->custom_fields[9]->value;
        $hobbies = $result->data->metadata->custom_fields[10]->value;
        $talentCategory = $result->data->metadata->custom_fields[11]->value;
        $parentsFullName = $result->data->metadata->custom_fields[12]->value;
        $parentEmail = $result->data->metadata->custom_fields[13]->value;
        $parentPhone = $result->data->metadata->custom_fields[14]->value;
        $parentAddress = $result->data->metadata->custom_fields[15]->value;
        $transaction_ref = $result->data->reference;
        $amount = $result->data->amount / 100;
        $payment_method = $result->data->channel;
        $regNumber = 'NTB24' . rand(1000, 9999);

        //Connect database
        include "./config/db.php";
            
  
        $query = "INSERT INTO application_form (firstName, lastName, email, phone, age, gender, address, healthCondition, reasonForCondition, stateOfOrigin, occupation, performanceType, stageName, hobbies, talentCategory, parentsFullName, parentEmail, parentPhone, parentAddress, transaction_ref, amount, payment_method, regNumber)
            VALUES ('$firstName', '$lastName', '$email', '$phone', '$age', '$gender', '$address', '$healthCondition', '$reasonForCondition', '$stateOfOrigin', '$occupation', '$performanceType', '$stageName', '$hobbies', '$talentCategory', '$parentsFullName', '$parentEmail', '$parentPhone', '$parentAddress', '$transaction_ref', '$amount', '$payment_method', '$regNumber')";
        
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            
            $_SESSION['regNumber'] = $regNumber;
            echo "<meta http-equiv='refresh' content='0; URL=payment-success?status=success'>";
        } else {
            echo 'Error Occured'. mysqli_error($conn);
            exit;
        }
    }
?>