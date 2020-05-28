<?php get_header(); ?>

<body> 
   <!-- Hovedtitel med beskrivelse -->
    <main role="main" class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5 display-1  text-white">
          Projekter
        </h1>
        <p class="lead mt-5 text-white">
          <small
            >Et udvalg af vores fineste arbejde alt fra entreprise til
            boligbyggeri.</small
          >
        </p>
      </div>
    </main>

    <!-- GALLERY START -->
    <!-- Filter funktion af knapper -->
    <div class="row">
      <div
        class="m-7 col d-flex flex-sm-row flex-column text-white justify-content-center"
      >
        <button
          type="button"
          class="btn m-2 btn-sm btn-light text-uppercase text-white filter"
          data-filter="all"
        >
          Alle projekter
        </button>
        <button
          type="button"
          class="btn m-2 p-2 btn-sm btn-light text-uppercase text-white filter"
          data-filter="1"
        >
          Hoved- & fagentrepriser
        </button>
        <button
          type="button"
          class="btn m-2 p-2 btn-sm btn-light text-uppercase text-white filter"
          data-filter="2"
        >
          Detail
        </button>

        <button
          type="button"
          class="btn m-2 p-2 btn-sm btn-light waves-effect text-uppercase text-white filter"
          data-filter="3"
        >
          Boligbyggeri
        </button>

        <button
          type="button"
          class="btn m-2 p-2 btn-sm btn-light waves-effect text-uppercase text-white filter"
          data-filter="4"
        >
          Snedkerarbejde
        </button>

        <button
          type="button"
          class="btn m-2 p-2 btn-sm btn-light waves-effect text-uppercase text-white filter"
          data-filter="5"
        >
          Erhvervsejendomme
        </button>

        <button
          type="button"
          class="btn m-2 p-2 btn-sm btn-light waves-effect text-uppercase text-white filter"
          data-filter="6"
        >
          Historiske bygninger
        </button>
      </div>
    </div>

    <!-- Start på Billeder Photos -->
    <div class="gallery" id="gallery">
      <!-- 1 START HOVED FAGNTREPRISER-->

      <!-- Fag - Eventhotel -->
      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Eventhotel_1.jpg"
          alt="Card image cap"
        />
      </div>

      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/eventhotel_2.jpg"
          alt="Card image cap"
        />
      </div>

      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/eventhotel_3.jpg"
          alt="Card image cap"
        />
      </div>

      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/eventhotel_4.jpg"
          alt="Card image cap"
        />
      </div>

      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/eventhotel_5.jpg"
          alt="Card image cap"
        />
      </div>

      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/eventhotel_6.jpg"
          alt="Card image cap"
        />
      </div>

      <!-- Hoved Ombyning af kontor -->
      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/kontor_1.jpg"
          alt="Card image cap"
        />
      </div>

      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/kontor_2.jpg"
          alt="Card image cap"
        />
      </div>

      <div class="mb-3 pics animation all 1">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/kontor_3.jpg"
          alt="Card image cap"
        />
      </div>
    </div>

    <!-- 2 DETAILHANDEL -->
    <div class="gallery" id="gallery">
      <!-- Suite Dreams -->
      <div class="mb-3 pics animation all 2">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Suitedreams_1.jpg"
          alt="Card image cap"
        />
      </div>

      <!-- <div class="mb-3 pics animation all 2">
        <img
          class="img-fluid"
          src="/Images/Suitedreams_2.jpg"
          alt="Card image cap"
        />
      </div> -->

      <div class="mb-3 pics animation all 2">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Suitedreams_3.jpg"
          alt="Card image cap"
        />
      </div>
      <!-- Føtex Netto Sportsmaster Apotek -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Fotex_1.jpg" alt="Card image cap" />
      </div>

      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Netto_1.jpg" alt="Card image cap" />
      </div>

      <div class="mb-3 pics animation all 2">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Sportsmaster_1.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 2">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Apotek_1.jpg"
          alt="Card image cap"
        />
      </div>
    </div>

    <!-- 3 BOLIGBYGGERI -->
    <div class="gallery" id="gallery">
      <!-- Kroyers -->
      <div class="mb-3 pics animation all 3">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Kroyers_1.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 3">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Kroyers_2.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 3">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Kroyers_3.jpg"
          alt="Card image cap"
        />
      </div>

      <!-- Erhverv Bolig ejendom -->
      <div class="mb-3 pics animation all 3">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Tag_1.jpg" alt="Card image cap" />
      </div>
    </div>

    <!-- 4 SNEDKERARBEJDE -->
    <div class="gallery" id="gallery">
      <!-- Snedker -->
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Snedker_1.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Snedker_2.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Snedker_3.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Snedker_4.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Snedker_5.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Snedker_6.jpg"
          alt="Card image cap"
        />
      </div>
      <!-- Garderobe -->
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Garderobe_1.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Garderobe_2.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Garderobe_3.jpg"
          alt="Card image cap"
        />
      </div>
      <!-- Køkken -->
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Kokken_1.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 4">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Kokken_2.jpg"
          style="width: 350; height: 260;"
          alt="Card image cap"
        />
      </div>
    </div>

    <!-- 5 ERHVERVSEJENDOM -->
    <div class="gallery" id="gallery">
      <!-- Bassin -->
      <div class="mb-3 pics animation all 5">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Bassin_1.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 5">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Bassin_2.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 5">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Bassin_3.jpg"
          alt="Card image cap"
        />
      </div>
    </div>

    <!-- 6 HISTORISKE BYGNINGER -->
    <div class="gallery" id="gallery">
      <!-- Bassin -->
      <div class="mb-3 pics animation all 6">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Peder-Hvitfeld_1.jpeg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 6">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Peder-Hvitfeld_2.jpg"
          alt="Card image cap"
        />
      </div>
      <div class="mb-3 pics animation all 6">
        <img
          class="img-fluid"
          src="<?php echo get_template_directory_uri(); ?>/img/Peder-Hvitfeld_3.jpeg"
          alt="Card image cap"
        />
      </div>
    </div>
</body>
<?php get_footer(); ?>