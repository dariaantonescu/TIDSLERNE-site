<?php
/**
 * Template Name: Konventionel behandlinger
 */
get_header();
?>
<section class="konventionel-page" style="background-color: #FFFDF5; padding: 60px 20px;">
  <div class="container" style="max-width: 1200px; margin: 0 auto;">
    <div class="filter-row">
  <h1 style="color: #333; font-size: 1.8rem; margin-bottom: 10px;">Konventionel</h1>
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
        'post_type' => 'konventionel',
        'posts_per_page' => -1
      ));

      if ($stories->have_posts()):
        while ($stories->have_posts()): $stories->the_post();
          $image = get_field('image_konventionelbehandling');
          $title = get_field('title_konventionelbehandling') ?: get_the_title();
          $text = get_field('text_konventionelbehandling');
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
        echo '<p>Ingen konventionel behandling fundet.</p>';
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


<?php get_footer(); ?>