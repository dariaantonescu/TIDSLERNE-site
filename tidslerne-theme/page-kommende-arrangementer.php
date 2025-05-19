<?php
/**
 * Template Name: Kommende arrangementer
 */
get_header();
?>
<section class="kommende-page" style="background-color: #FFFDF5; padding: 60px 20px;">
  <div class="container" style="max-width: 1200px; margin: 0 auto;">
    <div class="filter-row">
  <h1 style="color: #333; font-size: 1.8rem; margin-bottom: 10px;">Kommende arrangementer</h1>
  <div class="dropdown-container">
  <label for="filter">Kategorier</label>
  <select id="filter">
    <option value="#">Vælg kategori</option>
    <option value="/kommende-arrangementer">Kommende</option>
    <option value="/tidligere-arrangementer">Tidlidgere</option>
  </select>
</div>
</div>


    <div class="story-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
      <?php
      $stories = new WP_Query(array(
        'post_type' => 'kommendearrangement',
        'posts_per_page' => -1
      ));

      if ($stories->have_posts()):
        while ($stories->have_posts()): $stories->the_post();
          $image = get_field('image_kommende');
          $title = get_field('title_kommende') ?: get_the_title();
          $text = get_field('text_kommende');
          $text = get_field('dato_kommende');
          $text = get_field('sted_kommende');
          $text = get_field('price_kommende');


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
        echo '<p>Ingen kommende arrangementer fundet.</p>';
      endif;
      ?>
    </div>
  </div>
  </section>
  <section class="form-nyheder-section">
  <div class="container">
    <h3>Tilmelding til arrangementer</h3>
    <p>
    Tidslerne bruger platformen <strong>NemTilmeld</strong> til at håndtere tilmelding til vores arrangementer, kurser og sejlture. <br />
      Klik herunder for at se aktuelle arrangementer og tilmelde dig.
    </p>
    <p>
  Flere arrangementer og opdateringer findes også i vores <a href="https://www.facebook.com/tidslernedk/?locale=da_DK" target="_blank">Facebook-gruppe</a>.
</p>
    <a href="https://tidslerne.nemtilmeld.dk" target="_blank" class="btn magentaN">Se arrangementer på NemTilmeld</a>
    </div>
  </div>
</section>




<?php get_footer(); ?>