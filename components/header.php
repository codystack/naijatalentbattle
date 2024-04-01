<?php
include "./config/db.php";
//GET VISTORS
$user_ip = $_SERVER['REMOTE_ADDR'];
$check_ip = mysqli_query($conn, "SELECT visitorip FROM traffic WHERE page ='home' and visitorip ='$user_ip'");
if(mysqli_num_rows($check_ip) >=1)
{
    //not unique user
}
else
{
    $insertQuery = mysqli_query($conn, "INSERT INTO traffic (page, visitorip) VALUE ('home','$user_ip')");
}
?>
<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="Naija, Talent, Hunt, Nigeria, Talent Hunt, Battle, 9ja" />
        <meta name="description" content="Naija Talent Battle is a live entertainment and Talent Contest across all creative genres. Naija Talent Battle is Committed to Creating Positive Platform for talent discovery through her annual Talent Competition that is focused in exposing and recruiting young and talented youths into the Entertainment industry in pursuit of their career. Naija Talent Battle is an engine room for Talent Promotion, Education and Empowerment, serving as a pathway to professionalism." />
        <meta name="author" content="Webify.com.ng" />

        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/favicon.JPG" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.JPG" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.JPG" />
        <link rel="manifest" href="assets/images/site.webmanifest.txt" />
        <link rel="shortcut icon" href="assets/images/favicon.JPG" />
        <meta name="msapplication-TileColor" content="#8b3dff" />

        <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="assets/libs/scrollcue/scrollCue.css" />
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/libs/glightbox/dist/css/glightbox.min.css" />

        <link rel="stylesheet" href="assets/fonts/css/boxicons.min.css" />

        <link rel="stylesheet" href="assets/css/style.css" />

        <title>Naija Talent Battle&reg;</title>
    </head>

    <body>