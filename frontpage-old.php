<?php 
/**
 * Template Name: Front page gammal
 */

get_header(); ?>

<?php include ( 'components/slider.php' ); ?>

<?php acf_localize_data(array( 'foo' => 'bar' )); ?>

<main>
  <?php include ( 'components/logos.php' ); ?>

  <section class="kompetens">
    <figure class="kompetens-picture">
      <img class="komp-bild" src="http://localhost/techlove/wp-content/uploads/2021/02/kompetensbild.jpg"
        alt="Kompetens bild">
    </figure>
    <div class="kompetens-right">
      Kompetensområden
    </div>
  </section>

  <div class="process-main">
    <div class="process">
      <img src="http://localhost/techlove/wp-content/uploads/2021/02/process-1.png" alt="">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem mollitia odio repellendus aspernatur incidunt ad
      aliquid ipsa molestias corrupti animi. A fugit et vel sunt ipsum cumque modi explicabo atque.
    </div>
    <div class="process">
      <img src="http://localhost/techlove/wp-content/uploads/2021/02/process-1.png" alt="">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque recusandae sapiente molestiae culpa aperiam
      corrupti architecto a nulla nihil atque, blanditiis, error earum enim tempore suscipit expedita alias sequi.
      Dolor.
    </div>
    <div class="process">
      <img src="http://localhost/techlove/wp-content/uploads/2021/02/process-1.png" alt="">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam beatae similique sapiente molestias ab tenetur
      et dolorem cupiditate tempora tempore, architecto ipsam veritatis, assumenda dicta asperiores aspernatur nulla
      sequi laborum.
    </div>
  </div>

  <section class="about-us">
    <div class="about-us-child-1">
      <?php $value = the_field( "om_oss" ); ?>

    </div>
    <article class="about-us-child-2">
      <?php $value = the_field( "varfor_oss" ); ?>

    </article>
  </section>

  <section class="aktuellt">
    Aktuellt
  </section>

</main>

<?php 

get_footer(); ?>