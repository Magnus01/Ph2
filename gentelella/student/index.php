<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sci-Code | </title>

    <?php require __DIR__ . '/utils/css.php'?>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- Sidebar Navigation -->
        <?php require __DIR__. '/utils/sidebar.php'; ?>

        <!-- Top Navigation -->
        <?php require __DIR__. '/utils/top-nav.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
            DASHBOARD
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require __DIR__. '/utils/footer.php'; ?>
        <!-- /footer content -->
    </div>
</div>

<?php require __DIR__. '/utils/js.php'; ?>
</body>
</html>