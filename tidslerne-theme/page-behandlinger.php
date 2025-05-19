<?php
/**
 * Template Name: Behandlinger
 */
get_header(); ?>


<section class="treatment-page" style="background-color: #FFFDF5; padding: 60px 20px;">
  <div class="container" style="max-width: 1200px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
      <h1 style="color: #333; font-size: 1.8rem; margin: 0;">Behandlinger</h1>
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

    <div class="treatment-grid" style="margin-top: 40px; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
      <?php
      $args = array(
        'post_type' => 'behandling',
        'posts_per_page' => -1
      );
      $behandling_query = new WP_Query($args);

      if ($behandling_query->have_posts()) :
        while ($behandling_query->have_posts()) : $behandling_query->the_post();
          $image = get_field('image_behandling');
          $title = get_field('title_behandling');
          $text = get_field('text_behandling');
      ?>
        <div style="background-color: #f3e7f2; ">
          <?php if ($image): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width: 100%; margin: 0;">
          <?php endif; ?>
          <h3 style="color: #ae1f64; font-size: 1.3rem; margin-bottom: 10px;"><?php echo esc_html($title); ?></h3>
          <p style="color: #333; font-size: 1rem; line-weight: 1.5; padding-bottom: 30px; "><?php echo esc_html($text); ?></p>
        </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>Ingen behandlinger fundet.</p>';
      endif;
      ?>
    </div>
  </div>
</section>
<section class="history-section">
  <div class="history-container">
    
    <div class="history-image">
      <img src="http://tidslerne.local/wp-content/uploads/2025/05/historie-scaled.jpg" alt="Historie billede">
    </div>

    <div class="history-text">
      <h2>Virkelige mennesker. Virkelige erfaringer.</h2>
      <p>Hos Tidslerne ved vi, at viden ikke kun kommer fra behandlere – men også fra dem, der har stået i det selv.<br/>
      Læs patienthistorier fra medlemmer, som har valgt deres egen vej i mødet med kræft, og få inspiration og håb til din egen rejse. </p>
      <a href="/patienthistorier" class="btn magenta">Se patienthistorier</a>
    </div>

  </div>
</section>
<section class="magazine-section">
  <div class="magazine-container">
    
    <div class="magazine-image">
      <img src="http://tidslerne.local/wp-content/uploads/2025/05/Magazine-Mockup1-scaled.png" alt="Magazine cover">
    </div>

    <div class="magazine-text">
      <h2>Tidslernes magasin: viden, valg og erfaringer</h2>
      <p>Vores magasin er skabt til dig, der ønsker at tage informerede beslutninger i mødet med kræft. Her finder du viden om både konventionelle og komplementære behandlingsformer, personlige fortællinger fra medlemmer, og indblik i kommende og tidligere arrangementer i foreningen. </br> 
        Magasinet udkommer løbende og er en del af det fællesskab, vi bygger sammen: hvor erfaring deles, og støtte gives videre. </br>
        Du er meget velkommen til at tilmelde dig vores nyhedsbrev og få seneste artikler, historier og arrangementer direkte i din indbakke.</p>
    </div>
  </div>
</section>
<section class="newsletter-signup">
  <div class="container">
    <h2>Tilmeld dig nyhedsbrevet</h2>
    <p>Få seneste nyt om artikler, arrangementer og patienthistorier direkte i din indbakke.</p>
    <?php echo do_shortcode('[wpforms id="74"]'); ?>
  </div>
</section>



<?php get_footer(); ?>
