<?php 
/**
 * Template Name: Front page
 */

get_header(); ?>

<?php include ( 'components/slider.php' ); ?>

<main>
  <?php include ( 'components/logos.php' ); ?>

  <section class="kompetens">
    <div class="kompetens-picture">
      bild
    </div>
    <div class="kompetens-right">
      Kompetensområden
    </div>
  </section>

  <div class="process-main">
    <div class="process">
      process 1
    </div>
    <div class="process">
      process 2
    </div>
    <div class="process">
      process 3
    </div>
  </div>

  <section class="about-us">
    <div class="about-us-child-1">
      Om oss
    </div>
    <article class="about-us-child-2">
      Varför
    </article>
  </section>

  <section class="aktuellt">
    Aktuellt
  </section>

</main>

<?php 

get_footer(); ?>