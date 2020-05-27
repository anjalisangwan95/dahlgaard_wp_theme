 <!-- HEADER KODE - DENNE KODE VIL VÆRE GÆLDENDE PÅ ALLE SIDER - INDEHOLDER META, LINKS & NAVNBAR -->
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
    <meta name="category" content="Projekter" />
    <meta
      name="keywords"
      content="Om os, Entreprise, Byg, Byggeri, Renovering"
    />

    <?php wp_head(); ?>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap"
      rel="stylesheet"
    />

  
    <link rel="shortcut icon" type="image/png" href="/Images/favicon.png" />
  </head>

  <body>
    <!-- NAVIGATIONS BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white navbar-right">
      <a class="navbar-brand" href="<?php echo site_url(''); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/dahlgaard_logo.png" width="200" height="150" alt="" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="mr-7 collapse navbar-collapse justify-content-end"
        id="navbarNavAltMarkup"
      >
        <div class="navbar-nav">
          <a
            class="pr-4 nav-item nav-link active font-weight-bold text-success"
            href="<?php echo site_url('/projekter'); ?>"
          >
            <u>Projekter</u> <span class="sr-only">(current)</span></a
          >
          <a class="pr-4 nav-item nav-link active text-white" href="<?php echo site_url('/om-os'); ?>"
            >Om os</a
          >
          <a
            class="pr-3 nav-item nav-link active text-white"
            href="<?php echo site_url('/kontakt'); ?>"
            >Kontakt</a
          >
        </div>
      </div>
    </nav>

</body>