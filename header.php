<!doctype html>
<html lang = en-gb>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167817876-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-167817876-1');
    </script>

    <meta charset="utf-8">
    <?php wp_head(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $title; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content= "<?php echo $description;?>">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One%7cLobster+Two%7cPoppins&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/b65bf85635.js" crossorigin="anonymous" async></script>
    <link rel="shortcut icon" type="image/jpg" href="img/site-logo.jpg">
    <link rel = "canonical" href = "<?php echo $canonical;?>">

    <!--Copied code below from stack overflow -->

    <!-- iPhone(first generation or 2G), iPhone 3G, iPhone 3GS -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/site-logo.jpg">
    <!-- iPad and iPad mini @1x -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/site-logo.jpg">
    <!-- iPhone 4, iPhone 4s, iPhone 5, iPhone 5c, iPhone 5s, iPhone 6, iPhone 6s, iPhone 7, iPhone 7s, iPhone8 -->
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/site-logo.jpg">
    <!-- iPad and iPad mini @2x -->
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/site-logo.jpg">
    <!-- iPad Pro -->
    <link rel="apple-touch-icon" sizes="167x167" href="assets/img/site-logo.jpg">
    <!-- iPhone X, iPhone 8 Plus, iPhone 7 Plus, iPhone 6s Plus, iPhone 6 Plus -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/site-logo.jpg">
</head>
<body>
<!--Accessibility Button-->
<a href="#content" class="skip-link">Skip To Content</a>

<header class="<?php echo $mainClass; ?> <?php echo $pageClass; ?>" id = "top">
    <nav class="master__navigation">
        <ul class="master__nav">
            <li>
                <a href="/" title = "Homepage" class = "master__nav-links <?php if($page=='home'){echo 'active';}?>">Home</a>
            </li>
            <li>
                <a href="/portfolio" title = "Portfolio" class = "master__nav-links <?php if($page=='portfolio'){echo 'active';}?>">Portfolio</a>
            </li>
            <li>
                <a href="/blogs" title = "Blog" class = "master__nav-links <?php if($page=='blog'){echo 'active';}?>">Blog</a>
            </li>
        </ul>
    </nav>
