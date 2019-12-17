<?php
include_once 'includes/config.php';
include_once 'includes/classes/Artist.php';
include_once 'includes/classes/Album.php';
include_once 'includes/classes/Song.php';

// session_destroy(); LOGOUT

if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
    echo "<script>userLoggedIn = '$userLoggedIn';</script>";
} else {
    header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to music</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="assets/js/script.js"></script>
</head>

<body>

    <div id="mainContainer">

        <div id="topContainer">
        
            <?php include_once 'includes/navBarContainer.php'; ?>

            <div id="mainViewContrainer">
                <div id="mainContent">