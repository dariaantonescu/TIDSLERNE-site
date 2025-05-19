<?php
/**
 * Template name: Webbutik
 */
get_header();
?>

<section class="webbutik-page">
<div class="webbutik-heading-row">
  <h1 class="webbutik-heading">Webbutik</h1>
  <a href="/kurv" class="btn magenta cart-button">
    <i class="fas fa-shopping-cart"></i> Kurv
  </a>
</div>
    <div class="webbutik-grid">
      <?php
      $args = array(
        'post_type' => 'web',
        'posts_per_page' => -1
      );
      $web_query = new WP_Query($args);
      if ($web_query->have_posts()) :
        while ($web_query->have_posts()) : $web_query->the_post();
          $image = get_field('image_product');
          $title = get_field('title_product');
          $price = get_field('price_product');
      ?>
        <div class="product-card">
          <div class="product-image">
            <?php if ($image): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
          </div>
          <div class="product-info">
            <h3><?php echo esc_html($title); ?></h3>
            <p class="price"><?php echo esc_html($price); ?> kr</p>
            <a href="#" class="btn magenta">Køb</a>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
