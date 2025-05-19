<?php
/**
 * Template Name: Nyheder
 */
get_header();
?>
<section class="ny-page" style="background-color: #FFFDF5; padding: 60px 20px;">
  <div class="container" style="max-width: 1200px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
      <h1 style="color: #333; font-size: 1.8rem; margin: 0;">Nyheder</h1>
      <div>
        <label for="category-select" style="margin-right: 20px; font-weight: 500; font-size: 1.2rem;">Kategorier</label>
        <select id="category-select" name="category" style="padding: 10px; font-size: 1rem; padding-right: 10px;">
          <option value="alle">Alle</option>
          <option value="Budwig kuren">Budwig kuren</option>
          <option value="Vitaminer og mineraler">Vitaminer og mineraler</option>
          <option value="Kropsligt">Kropsligt</option>
        </select>
      </div>
    </div>

    <form role="search" method="get" class="news-search-form" action="">
  <input type="search" name="s" placeholder="Søg i nyheder..." value="<?php echo get_search_query(); ?>">
  <input type="hidden" name="post_type" value="ny">
  <button type="submit" class="btn magenta">Søg</button>
</form>

    <div class="nyheder-grid" style="margin-top: 40px; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
      <?php
      $args = array(
        'post_type' => 'ny',
        'posts_per_page' => -1,
        's' => get_search_query()
      );      
      $ny_query = new WP_Query($args);

      if ($ny_query->have_posts()) :
        while ($ny_query->have_posts()) : $ny_query->the_post();
          $image = get_field('ny_image');
          $title = get_field('ny_title');
          $text = get_field('ny_text');
      ?>
        <div class="nyhed-card">
          <?php if ($image): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width: 100%; margin: 0;">
          <?php endif; ?>
          <h3 style="color: #ae1f64; font-size: 1.3rem; margin-bottom: 10px;"><?php echo esc_html($title); ?></h3>
          <p style="color: #333; font-size: 1rem; line-weight: 1.5; padding-bottom: 30px; "><?php echo esc_html($text); ?></p>
          <div class="btn-wrapper">
  <a href="<?php the_permalink(); ?>" class="btn magenta">Læs mere</a>
</div>
        </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>Ingen nyheder fundet.</p>';
      endif;
      ?>
    </div>
  </div>
</section>

<section class="load-more-section">
  <div class="container">
    <div class="load-more-wrapper">
      <a href="#" class="btn magenta">Indlæs flere</a>
    </div>
  </div>
</section>
<section class="form-nyheder-section">
  <div class="container">
    <h3>Hold dig opdateret med Tidslernes nyhedsbrev</h3>
    <p>
    Tilmeld dig vores nyhedsbrev og få de nyeste artikler, patienthistorier og information om kommende arrangementer. <br/>
    Bliv en del af fællesskabet – og få viden og inspiration leveret til dig.
    </p>
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
