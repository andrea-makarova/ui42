<?php
session_start();
try {
    require_once('private/db.php');
    $query = $db->prepare('UPDATE users SET first_login = :first_login WHERE id = :id');
    $query->bindValue(':first_login', 'not');
    $query->bindValue(':id', $_POST['id']);
    $_SESSION['first_login'] = 'not';
    $query->execute();



    http_response_code(200);
    header('location:tasks.php');
} catch (Exception $ex) {
    sendError(500, 'server under maintaince', __LINE__);
}


function sendError($iErrorCode, $sMessage, $iLine)
{
    http_response_code($iErrorCode);
    header('Content-Type: application/json');
    echo '{"message":"' . $sMessage . '", "error":"' . $iLine . '"}';
    exit();
}
