<?php

include_once('../../Functions/userFunction.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnSave'])) {
    $result = userRegistration(
        $_POST['userName'],
        $_POST['userEmail'],
        $_POST['userPass'],
        $_POST['userPhone'],
        $_POST['userNic']
    );

    if ($result === "Your registration was successful!") {
        header("Location: ../../../Index.php?registration=success");
        exit();
    }

    echo $result;
}