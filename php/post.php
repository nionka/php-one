<?php
    $nickname = $_POST['nickname'];

    if(trim($nickname) === '') {
        header('Location: /index.php');
    }

    session_start();
    $_SESSION['nickname'] = $nickname;

    header('Location: /index.php');