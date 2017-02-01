<?php
session_start();

if (isset($_POST['id'])) {
    $_SESSION['Course_id'] = $_POST['id'];
    echo $_SESSION['Course_id'];
} else {
    echo "0";
}