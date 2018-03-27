<?php

/* Template Name: Template home */

?>
<?php get_header(); ?>

<div class="slider">

  <div class="slider_un">
      <?php
      $features = get_posts( array(
        'posts_per_page' => 2,
        'post_type' => 'post',
        'category' => 3,
        'post_status' => 'publish',
        'orderby' => 'post_date',
        'order' => 'ASC'
      ));

      foreach ($features as $feature) {
        echo '<div class="slider_project" style="background-image: url('.get_the_post_thumbnail_url($feature->ID).')">';?>
          <span class="projet">Le mobilier adaptable </span>
          <span class="projet_deux">pour toute la vie </span>
      <?php   echo '</div>';
      }

      ?>
  </div>
</div>

<section id="concept" class="grid-container">


  <?php

            $concept = get_posts( array(
              'posts_per_page' => 4, // -1 pour afficher tous les articles
              'post_type' => 'concept', // Type articles
              'post_status' => 'publish', // statut public uniquement
              'orderby' => 'post_date', // trier par date
              'order' => 'ASC' // trier par date décroissante
            ));

            foreach( $concept as $concept) {
                echo '<div class="grid-x">';
                  echo '<div class="cell large-6 medium-6 text-center meuble">';
                  echo '<img>'.get_the_post_thumbnail($concept->ID).'</img>';
                   echo '</div>';


                  echo '<div class="text_concept cell large-6 medium-6">';
                   echo '<h2><span>'.get_field('titre', $concept->ID).'</span></h2>';
                   echo '<h3><span>'.get_field('titredeux', $concept->ID).'</span></h3><br>';
                   echo '<p class="para">'.get_field('paragraphe', $concept->ID).'</p>';
                   echo '</div>';


                echo '</div>';
            }

            ?>

</section>

<section id="produits">

  <div class="titre"><span>La</span>
  <h2>boutique</h2><br>
</div>
  <?php

            $produits = get_posts( array(
              'posts_per_page' => 6, // -1 pour afficher tous les articles
              'post_type' => 'produits', // Type articles
              'post_status' => 'publish', // statut public uniquement
              'orderby' => 'post_date', // trier par date
              'order' => 'ASC' // trier par date décroissante
            ));

            foreach( $produits as $produits) {
                echo '<div class="produit" style="background-image: url('.get_the_post_thumbnail_url($produits->ID).')">';
                   echo '<h3><span>'.get_field('titreproduit', $produits->ID).'</span></h3>';?>
                   <a href="<?php get_field('panier', $produits->ID) ?>">
       							<img src="<?php echo get_template_directory_uri(); ?>/img/panier.png" alt="panier" class="panier-img">
       						</a>
                  <?php echo '</div>';

            }

            ?>
</section>

<section id="modul1">
  <?php
  $lien = get_posts( array(
    'posts_per_page' => 1,
    'post_type' => 'post',
    'category' => 4,
    'post_status' => 'publish',
    'orderby' => 'post_date',
    'order' => 'ASC'
  ));

  foreach ($lien as $lien) {
    ?>
    <a href="<?php get_field('lien', $lien->ID) ?>">
    <span>Personnalisé votre intérieur</span>
  </a> <?php

  }

  ?>
</section>

<section class="tango">
  <?php

    echo '<span>'.get_field('laureat').'</span>';?>
     <img src="<?php echo get_template_directory_uri(); ?>/img/tango.jpg" alt="tango & scan">

</section>

<section id="contact" class="grid-container">
  <div class="titre">
  <h2>Contact</h2><br>
  <div class="grid-x">

    	<div class="cell large-6 small-12 medium-6 illustration text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/form_un.jpg" alt="tango & scan"><br><br>
        <img src="<?php echo get_template_directory_uri(); ?>/img/form_deux.jpg" alt="tango & scan">
      </div>

      <div class="cell large-6 small-12 medium-6 form">
        <?php
        $contact = get_posts( array(
          'posts_per_page' => 1,
          'post_type' => 'post',
          'category' => 5,
          'post_status' => 'publish',
          'orderby' => 'post_date',
          'order' => 'ASC'
        ));

        foreach ($contact as $contact) {

           echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]');

        }

        ?>
      </div>

  </div>

</section>


<?php get_footer(); ?>
