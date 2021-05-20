<?php
    session_start();

    if ($_SESSION['nickname']) {
        $nickname = $_SESSION['nickname'];
        include 'html/hello.html';
    } else {
        include 'html/form.html';
    }
