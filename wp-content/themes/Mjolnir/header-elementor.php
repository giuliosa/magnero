<?php
$url = "http://" . $_SERVER['HTTP_HOST'];
$url .= "/";
$url .= $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- <title>Magnero <?php // the_field('titulo'); ?></title> -->
    <meta name="description" content="<?php // the_field('descricao'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f3615f ">
    <meta name="keywords" content="<?php // the_field('palavras_chave'); ?>"/>
    <meta name="robots" content="index, follow">
    <meta name="author" content="Giulio Sá">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Preservtec">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#415f9d">
    <meta name="apple-mobile-web-app-title" content="Preservtec">

    <!-- para o Twitter Card -->
    <meta name="twitter:card" value="summary">
    <meta name="twitter:url" value="<?php echo $url; ?>">
    <meta name="twitter:site" content="@magnero">
    <meta name="twitter:title" content="<?php // the_field('titulo'); ?>">
    <meta name="twitter:description" content="<?php // the_field('descricao'); ?>">
    <meta name="twitter:creator" content="@giuliopires_sa">
    <!--  imagens para o Twitter Summary Card precisam ter pelo menos 200×200 px  -->
    <meta name="twitter:image" content="<?php // the_field('imagem'); ?>">

    <!--  para o sistema Open Graph -->
    <meta property="og:title" content="<?php // the_field('titulo'); ?>" />
    <meta property="og:type" content="<?php // the_field('type_op'); ?>" />
    <meta property="og:url" content="<?php echo $url; ?>" />
    <meta property="og:image" content="<?php // the_field('imagem'); ?>" />
    <meta property="og:description" content="<?php // the_field('descricao'); ?>" />
    <meta property="og:site_name" content="<?php // the_field('titulo'); ?>" />
    <meta property="fb:admins" content="preservtec" />

    <!-- Pinterest -->
    <meta name="p:domain_verify" content="f3848becf6a26aaadc9a110cca2e55d2"/>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <!-- WP HEADER -->
    <?php wp_head(); ?>
    <!-- FIM WP HEADER -->

</head>

<body <?php body_class('corpo'); ?> >
    
