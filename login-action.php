<?php

//ini_set('display_errors', 1); display errors
//ini_set('display_errors', 0); do  not display errors


if (!isset($_POST['mail'])) {
    sendError(400, 'missing mail', __LINE__);
}

if (!isset($_POST['password'])) {
    sendError(400, 'missing password', __LINE__);
}

if (strlen($_POST['mail']) < 4) {
    sendError(400, 'mail must be at least 4 characters', __LINE__);
}

if (strlen($_POST['mail']) > 25) {
    sendError(400, 'mail can not be longer than 25 characters', __LINE__);
}



require_once('private/db.php');
try {

    session_start();



    $query = $db->prepare('SELECT * FROM users WHERE email = :mail');
    $query->bindValue(':mail', $_POST['mail']);
    $query->execute();
    $result = $query->fetch(MYSQLI_ASSOC);
    if (password_verify($_POST['password'], $result['password'])) {
        $_SESSION['id'] = $result['id'];
        $_SESSION['image'] = $result['image'];
        $_SESSION['full_name'] = $result['full_name'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['first_login'] = $result['first_login'];
        $_SESSION['position'] = $result['position'];
        $_SESSION['employment_type'] = $result['employment_type'];
        header('location: tasks.php');
        exit();
        sendError(200, 'you are logged in', __LINE__);
    } else {
        header('location: login.php');
        sendError(400, 'wrong username or password', __LINE__);
    }
} catch (Exception $ex) {
    echo $ex;
    sendError(500, 'system under maintaince', __LINE__);
}

//###############################

function sendError($iResponseCode, $sMessage, $iLine)
{
    http_response_code($iResponseCode);
    header('Content-Type: application/json');
    echo '{"message":"' . $sMessage . '", "error":' . $iLine . '}';
    exit();
}
