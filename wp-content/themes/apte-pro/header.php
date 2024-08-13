<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <meta name="description" content=" content " />
    <meta name="keywords" content=" content " />
    <meta name="author" content=" content " />
    <meta name="robots" content=" all " />
    <meta name="googlebot" content=" all ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<div id="header">
    <div class="inner">
        <div class="headerBar">
            <p class="logo"><a class="hover" href="<?php home_url() ?>"><img src="<?php echo get_theme_file_uri().('/assets/images/common/logo.png') ?>" alt=""></a></p>
            <div class="hamburger sp">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="mainMenu">
            <ul class="menu">
                <?php wp_nav_menu(['theme_location'=>'headerMenu', 'container'=>'']); ?>
            </ul>
        </div>
    </div>
</div>
<!-- #header -->
<div id="fixH"></div>