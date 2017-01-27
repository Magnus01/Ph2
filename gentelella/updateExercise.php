<?php
session_start();

if (isset($_POST['id'])) {
    $_SESSION['Exercise_id'] = $_POST['id'];
    echo $_SESSION['Exercise_id'];
} else {
    $_SESSION['Exercise_id'] = 0;
    echo $_SESSION['Exercise_id'];;
}