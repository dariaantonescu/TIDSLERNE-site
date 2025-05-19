<?php
/**
 * Template Name: Kontakt os
 */
get_header();
?>

<section class="contact-page" style="padding: 60px 20px;">
  <div class="container" style="max-width: 800px; margin: 0 auto; font-family: 'Inter', sans-serif; color: #333;">
    
    <h1 style="font-size: 2rem; color: #333;"><?php the_field('contact_heading'); ?></h1>

    <p><strong><?php the_field('contact_name'); ?></strong></p>
    <p><?php the_field('contact_address'); ?></p>
    
    <p><strong>CVR:</strong> <?php the_field('contact_cvr'); ?></p>
    <p><strong>Telefon:</strong> <?php the_field('contact_phone'); ?></p>
    <p><strong>Email:</strong> <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></p>
    
    <p><strong>Elektronisk fakturering:</strong><br>
    <a href="mailto:<?php the_field('contact_invoice_email'); ?>"><?php the_field('contact_invoice_email'); ?></a></p>
    
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

<?php get_footer(); ?>
