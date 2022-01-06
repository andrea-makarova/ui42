<?php

if (!isset($_POST['name'])) {
    sendError(400, 'Chýbajúce meno', __LINE__);
}

if (strlen($_POST['name']) < 4) {
    sendError(400, 'Meno musí obsahovať viac, ako 4 znaky', __LINE__);
}

if (strlen($_POST['name']) > 30) {
    sendError(400, 'Meno nesmie obsahovať viac, ako 30 znakov', __LINE__);
}

if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    sendError(400, 'Neplatný formát emailu', __LINE__);
}

if (!isset($_POST['password'])) {
    sendError(400, 'Chýbajúce heslo', __LINE__);
}

if (strlen($_POST['password']) < 4) {
    sendError(400, 'Heslo musí obsahovať viac, ako 4 znaky', __LINE__);
}

if (strlen($_POST['password']) > 20) {
    sendError(400, 'Heslo nesmie obsahovať viac, ako 20 znakov', __LINE__);
}


if (!isset($_POST['passwordVerification'])) {
    sendError(400, 'Over heslo', __LINE__);
}

if ($_POST['passwordVerification'] != $_POST['password']) {
    sendError(400, 'Heslá sa nezhodujú', __LINE__);
}



try {
    require_once('private/db.php');
    session_start();
    $q = $db->prepare('SELECT * FROM users');
    $q->execute();
    $ajUsers = $q->fetchAll();
    foreach ($ajUsers as $jUser) {
        if ($jUser->full_name == $_POST['name']) {
            echo "user with this username already exists, try again or login";
            exit();
        }
    }
    foreach ($ajUsers as $jUser) {
        if ($jUser->mail == $_POST['mail']) {
            echo "user with this email already exists, try again or login";
            exit();
        }
    }

    $targetDir = "assets/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    function rand_string($length)
    {

        $chars = "0123456789";
        return substr(str_shuffle($chars), 0, $length);
    }


    $array_position = array("DEV oddelenie", "UX oddelenie", "Performance marketing", "PM oddelenie", "Ekonomické oddelenie", "Sales & Marketing", "Key Accounts");
    $array_employment = array("Employee", "Self-employed");

    $image_id = uniqid(true);
    $context = stream_context_create(array('http' => array('header' => 'Connection: close\r\n')));
    file_put_contents('assets/images/profiles/' . $image_id . '.png', file_get_contents('https://loremflickr.com/200/200/human-face'), false, $context);

    $query = $db->prepare('INSERT INTO users VALUES (:id, :full_name, :email, :password, :image, :phone, :position, :employment_type, :first_login)');
    $query->bindValue(':id', null);
    $query->bindValue(':full_name', $_POST['name']);
    $query->bindValue(':email', $_POST['mail']);
    $query->bindValue(':password', PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT));
    $query->bindValue(':image', $image_id . '.png');
    $query->bindValue(':phone', rand_string(8));
    $query->bindValue(':position', $array_position[array_rand($array_position, 1)]);
    $query->bindValue(':employment_type', $array_employment[array_rand($array_employment, 1)]);
    $query->bindValue(':first_login', 'yes');
    $query->execute();



    http_response_code(200);
    header('location: login.php');
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
