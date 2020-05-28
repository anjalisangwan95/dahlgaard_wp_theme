<?php get_header('front-page'); ?>

  <body> 
    
    <!-- Descrption teskt an introduktion -->
    <main role="main" class="inner cover">
      <div class="d-inline-flex flex-column bd-highlight">
        <div class="mx-7 mt-6 mb-0 p-6 bd-highlight">
          <blockquote class="blockquote text-center text-white">
            <p class="mb-0 h1">
              Vi udføre hovedrentrepriser hurtigt og professionelt, samt
              fagentrepriser inden for renovering og nybyg, vil vi være en stærk
              partner i byggebranchen.
            </p>
            <footer class="blockquote-footer text-white">
              <br />Godt håndværk siden 1996
            </footer>
          </blockquote>
        </div>
        <p class="text-center">
          <a
            href="<?php echo site_url('/projekter'); ?>"
            class="btn btn-md bg-light text-white"
            role="button"
            ><small>SE PROJEKTER</small></a
          >
        </p>
      </div>
    </main>

    <!-- Visuel element -->
    <div class="d-flex p-2 bd-highlight position-fixed">
      <img
        id="figur"
        src="<?php echo get_template_directory_uri(); ?>/img/forside_element.png"
        class="img-fluid"
        alt="Responsive image"
      />
    </div>

  </body>


  <?php get_footer('front-page'); ?>
