<!DOCTYPE html>
<html <?php language_attributes( ) ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/qfk4siz.css">
    <link rel="stylesheet" href="https://use.typekit.net/qfk4siz.css">
    <?php wp_head(); ?>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <header>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg" id="nav" style="z-index: 1000; position: absolute; width: 100%">
  <div class="container-fluid">
  <a class="navbar-brand" href="https://nors.mariewium.dk/">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/nors_logo.svg" alt="" style="height: auto; width: 60px;">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EFEBE5" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
      </svg>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link" href="https://nors.mariewium.dk/">HJEM</a>
        <a class="nav-link" href="https://nors.mariewium.dk/products">PRODUKTER</a>
        <a class="nav-link" href="#footer">KONTAKT</a>
      </div>
    </div>
  </div>
</nav>