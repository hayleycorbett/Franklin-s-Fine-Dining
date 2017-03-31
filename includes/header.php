<?php
    $companyName = "Franklin's Fine Dining";
    include('includes/arrays.php');

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo TITLE; ?></title>
        <link rel="stylesheet" href="/assets/styles.css">
    </head>
    <body id="final-example">
        <div class="wrapper">
            <div id="banner">
                <a href="/" title="Return to Home"></a>
                    <img src="img/banner.png" alt="Franklin's Fine Dining">
            </div><!-- banner -->

            <div id="nav">
                <?php include('includes/nav.php'); ?>
            </div><!-- nav -->

            <div class="content">
