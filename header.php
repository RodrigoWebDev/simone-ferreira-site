<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Simone Ferreira | Psicóloga</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() . '/img/favicon.png'?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() . '/css/new-age.css'?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() . '/css/overwrite.css'?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() . '/css/my-framework.css'?>" rel="stylesheet">
    <?php wp_head();?>


</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger web-title" href="#page-top"><img class="hover" src="<?php echo get_template_directory_uri() . '/img/logo.png'?>" alt="Logo"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php wp_nav_menu(array(
                    "menu_class" => "navbar-nav ml-auto",
                    "container" => "ul",
                    "container_class" => "navbar-nav ml-auto",
                    "theme_location" => "meu-menu",
                ));?>   
        </div>
        </div>
    </nav>
