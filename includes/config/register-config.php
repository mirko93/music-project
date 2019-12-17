<?php 

function formInputUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function formInputString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function formInputPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}

if (isset($_POST['registerButton'])) {
    // register button was pressed
    $username = formInputUsername($_POST['username']);
    $firstName = formInputString($_POST['firstName']);
    $lastName = formInputString($_POST['lastName']);
    $email = formInputString($_POST['email']);
    $email2 = formInputString($_POST['email2']);
    $password = formInputPassword($_POST['password']);
    $password2 = formInputPassword($_POST['password2']);

    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if ($wasSuccessful === true) {
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    };
}
