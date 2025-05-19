<?php get_header(); ?>

<section class="about-section">
  <div class="about-container">
    
    <div class="about-image">
      <img src="http://tidslerne.local/wp-content/uploads/2025/05/heroimageTidslerne-min.png" alt="Kvinde dufter til tidsel">
    </div>

    <div class="about-text">
      <h2>Hvem er Tidslerne?</h2>
      <p>Som tidslen – sej, rodfast og søgende mod lyset – har alle kræftramte deres egen styrke.<br><br>
        Hos Tidslerne støtter vi den styrke med viden: om konventionel og komplementær behandling i Danmark og i udlandet.<br><br>
        Du vælger vejen. Vi går ved din side.<br>
        Hvert kræftforløb er unikt.<br>
        Vi giver dig viden, ikke pres – så du selv kan vælge, hvad der er rigtigt for dig.</p>
      <a href="/om-os" class="btn magenta">Læs mere om os</a>
    </div>

  </div>
</section>

<section class="action-cards">
  <div class="card-container">

  <a href="/bliv-frivillig" class="card card-light">
  <span>Bliv<br>frivillig</span>
  <i class="fas fa-hands-helping"></i>
</a>

<a href="/bliv-medlem" class="card card-magenta">
  <span>Bliv<br>medlem</span>
  <i class="fas fa-user-plus"></i>
</a>

<a href="/stot-os" class="card card-green">
  <span>Støt<br>os</span>
  <i class="fas fa-heart"></i>
</a>

  </div>
</section>

<section class="behandlinger-section fade-in">
  <h2 style="color: #333; font-size: 1.8rem; margin-bottom: 10px;">Behandlinger</h2>

  <div class="behandlinger-container">
    <?php
    $behandlinger = new WP_Query(array(
      'post_type' => 'behandling',
      'posts_per_page' => 3
    ));

    while ($behandlinger->have_posts()) : $behandlinger->the_post();

      $image = get_field('image_behandling');
      $title = get_field('title_behandling');
      $text = get_field('text_behandling');
    ?>
      <div class="behandling-card">
        <?php if ($image): ?>
          <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>

        <?php if ($title): ?>
          <h3><?php echo esc_html($title); ?></h3>
        <?php endif; ?>

        <?php if ($text): ?>
          <p><?php echo esc_html($text); ?></p>
        <?php endif; ?>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>

  <a href="/behandlinger" class="btn magenta">Læs mere om behandlinger</a>
</section>

<section class="actor-section">
  <div class="actor-container">
    
    <div class="actor-image">
      <img src="http://tidslerne.local/wp-content/uploads/2025/05/actorimage.png" alt="Kvinde dufter til tidsel">
    </div>

    <div class="actor-text">
      <h2>Hvores protektor</h2>
      <p>Hos Tidslerne tror vi pả, at viden og fallesskab kan skabe tryghed i en svar tid. <br>
      Sammen med vores protektor, GHITA NORBY, Kommandor at Dannebrogordenen og skuespiller ved Det Kongelige leater, arbejder vi for at give adgang til viden om kraftbehandling
      - i Danmark og i udlandet.</p>
    </div>

  </div>
</section>

<section class="medlemsfordele-section fade-in">
  <h2 style="color: #333; font-size: 1.8rem; margin-bottom: 10px;">Medlemsfordele</h2>

  <div class="medlemsfordele-container">
    <?php
    $medlemsfordele= new WP_Query(array(
      'post_type' => 'medlemsfordel',
      'posts_per_page' => 3
    ));

    while ($medlemsfordele->have_posts()) : $medlemsfordele->the_post();

      $image = get_field('image_fordele');
      $title = get_field('title_fordele');
      $text = get_field('text_fordele');
    ?>
      <div class="medlemsfordel-card">
        <?php if ($image): ?>
          <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>

        <?php if ($title): ?>
          <h3><?php echo esc_html($title); ?></h3>
        <?php endif; ?>

        <?php if ($text): ?>
          <p><?php echo esc_html($text); ?></p>
        <?php endif; ?>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>

  <a href="/medlemsfordel" class="btn magenta">Tegn medlemskab her </a>
</section>



<?php get_footer(); ?>
