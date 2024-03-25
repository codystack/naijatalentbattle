<?php

$reference = $_POST['reference'];

$url = "https://api.paystack.co/transaction/verify/" . $reference;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer sk_test_6b40ec0fb2219f4e58739cbc178a868bc1b41495'));

$result = curl_exec($ch);

curl_close($ch);

$response = json_decode($result);

if ($response->data->status == "success") {
    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}