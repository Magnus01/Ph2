<?php 

        require __DIR__. '/classes/session.php'; // Model
session::destroy('user_session');
session_start() ;
session_destroy() ;
$_SESSION = [];
header('location:connection.php');

        if (isset($_SESSION['user_session'])) {
            session::destroy('user_session');
            header('location:connection.php');
        }

    ?>