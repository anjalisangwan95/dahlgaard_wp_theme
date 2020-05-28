<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="description"
      content="Førende inden for renovering af fredet ejendomme. Vi har allerede en dybdegående viden om, sammensætningen af historiske og fredet ejendomme i det offentlige og private rum. Vi vil bestræbe os på at opnå visionen gennem tillidsvækkende relationer til bla. arkitekter, byggesagkyndige og bygningsinspektører, der beskæftiger sig med historiske ejendomme."
    />
    <meta name="area" content="Danmark" />
    <meta name="category" content="Forside" />
    <meta
      name="keywords"
      content="Om os, Entreprise, Byg, Byggeri, Renovering"
    />

    <!-- Forsiden har sin egen header. Linje 19 fortæller, at naar man er paa side 9 (hvilket er forsidens id nr) skal den hente dens egen header-->
    <?php if(is_page(9)) { get_header('front-page'); } else { get_header(); } wp_head(); ?>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/png" href="/Images/favicon.png" />
  </head>

  <body class="index">
    <!-- NAVIGATIONS BAR -->
    <nav class="navbar navbar-white bg-white justify-content-center">
      <a class="navbar-brand" href="index.html">
      <img src="<?php echo get_template_directory_uri(); ?>/img/dahlgaard_logo.png" width="200" height="150" alt="" />
      </a>
    </nav>
   