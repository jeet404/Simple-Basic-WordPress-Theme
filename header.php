<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen'  href="<?php echo get_template_directory_uri(); ?>\css/main.css">
    <script src='main.js'></script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="header">
        <div class="site-title">
            <a href="#">NoOne.com</a>
        </div>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>