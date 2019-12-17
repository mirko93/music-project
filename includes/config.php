<?php 

ob_start();
session_start();

$timezone = date_default_timezone_set('Europe/Belgrade');
$con = mysqli_connect("127.0.0.1", "root", "", "spotify");

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}



// try {
//     $connection = new PDO(
//         'mysql:host=127.0.0.1;dbname=spotify',
//         'root',
//         'password'
//     );

//     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (Exception $e) {
//     echo $e->getMessage();
// }