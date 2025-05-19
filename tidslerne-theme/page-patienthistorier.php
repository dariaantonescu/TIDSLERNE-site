<?php
/**
 * Template Name: Patienthistorier
 */
get_header();
?>

<!-- Hero video section -->
<section class="video-section">
<video controls loop playsinline style="width: 100%; height: auto; max-width: 100%; display: block; margin: 0 auto;">
  <source src="http://tidslerne.local/wp-content/uploads/2025/05/Tidslerne_video.mp4" type="video/mp4">
  Din browser understøtter ikke videoafspilleren.
</video>
</section>

<!-- Page title -->
<section class="patient-page" style="background-color: #FFFDF5; padding: 60px 20px;">
  <div class="container" style="max-width: 1200px; margin: 0 auto;">
    <div class="filter-row">
  <h1 style="color: #333; font-size: 1.8rem; margin-bottom: 10px;">Patienthistorier</h1>
  <div class="dropdown-container">
  <label for="filter">Kategorier</label>
  <select id="filter">
    <option value="#">Vælg kategori</option>
    <option value="/udlandet">Udlandet</option>
    <option value="/komplementaer-behandling">Komplementær</option>
    <option value="/konventionel-behandlinger">Konventionel</option>
  </select>
</div>
</div>


    <div class="story-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
      <?php
      $stories = new WP_Query(array(
        'post_type' => 'patienthistorie',
        'posts_per_page' => -1
      ));

      if ($stories->have_posts()):
        while ($stories->have_posts()): $stories->the_post();
          $image = get_field('image_patient');
          $title = get_field('title_patient') ?: get_the_title();
          $text = get_field('text_patient');
      ?>
        <div class="story-card" style="background: #E8F4E7; ">
          <?php if ($image): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width: 100%; margin: 0;">
          <?php endif; ?>
          <h3 style="color: #536D59; font-size: 1.3rem; margin-bottom: 10px; margin-top: 20px;"><?php echo esc_html($title); ?></h3>
          <p style="color: #333; font-size: 1rem; line-weight: 1.5; padding-bottom: 30px;"><?php echo esc_html($text); ?></p>
          <div class="btn-wrapper">
  <a href="<?php the_permalink(); ?>" class="btn magenta">Læs mere</a>
</div>
        </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else:
        echo '<p>Ingen patienthistorier fundet.</p>';
      endif;
      ?>
    </div>
  </div>
</section>

<section class="patient-section">
  <div class="patient-container">
    
    <div class="patient-image">
      <img src="http://tidslerne.local/wp-content/uploads/2025/05/tidslerne_bestyrelse_2019_2.jpg" alt="Vores medlemmer">
    </div>

    <div class="patient-text">
      <h2>Mød vores medlemmer </h2>
      <p>Mange af de patienter, som deler deres historier her, har fundet vej til Tidslerne, fordi de søgte viden, håb og støtte i en svær tid.</br>
        De valgte at blive medlemmer – og med det fik de adgang til et fællesskab af ligesindede, arrangementer, kurser og ressourcer, der rækker ud over det almindelige. Som medlem får du mulighed for at deltage i netværksgrupper, opleve inspirerende foredrag og tage del i vores aktiviteter – både fysisk og online. Du står ikke alene. Vi står sammen.</p>
      <a href="/om-os" class="btn magenta">Bliv medlem</a>
    </div>

  </div>
</section>
<section class="video-library">
  <div class="container">
    <h2>Videobiblioteket</h2>
    <p>Her finder du udvalgte videoer med erfaringer, interviews og foredrag fra vores medlemmer og samarbejdspartnere.</p>

    <div class="video-grid">
      <div class="video-item">
        <p>Interview med Mai Nielsen og Peter Køpke.</p>
        <iframe src="https://www.youtube.com/embed/rjm7kX3w57k" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="video-item">
        <p>Peter Køpkes historie om Budwig kuren.</p>
        <iframe src="https://www.youtube.com/embed/0zR1lgEPU3I" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="video-item">
        <p>Claus Hancke foredrag – Cancer. En anden vej?</p>
        <iframe src="https://www.youtube.com/embed/VICqBMF06OA" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="video-item">
        <p>Mai Nielsen, formand for Kræftforeningen Tidslerne</p>
        <iframe src="https://www.youtube.com/embed/K2RdwqJU2lo" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<section class="form-info-section">
  <div class="container">
    <h3>Din stemme gør en forskel</h3>
    <p>
      Hos Tidslerne værdsætter vi dine oplevelser og din feedback. </br>
      Hver stemme tæller, og vi er taknemmelige for, at du vil dele din. 
    </p>
  </div>
</section>

<section class="share-story" style=" padding: 60px 20px;">
  <div class="container" style="max-width: 800px; margin: 0 auto; text-align: center;">
    <h2>Del din oplevelse</h2>
    <p>Del din oplevelse efter et arrangement med Tidslerne. Din stemme kan inspirere og styrke andre. Du vælger selv, om du vil være anonym.</p>
    <?php echo do_shortcode('[wpforms id="60"]'); ?>
  </div>
</section>


<?php get_footer(); ?>
