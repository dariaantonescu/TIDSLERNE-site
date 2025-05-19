<?php
/**
 * Template Name: Bliv Frivillig
 */
get_header();
?>

<section class="volunteer-section">
  <div class="volunteer-container">
    
    <div class="volunteer-image">
      <img src="http://tidslerne.local/wp-content/uploads/2025/05/volunteersupport-scaled.jpg" alt="Volunteer image">
    </div>

    <div class="volunteer-text">
      <h2>Bliv frivillig i Tidslernes Forening</h2>
      <p>Som frivillig i Tidslernes Forening er du med til at gøre en reel forskel for mennesker ramt af kræft og deres pårørende. </br>
      Din indsats bidrager til fællesskab, håb og bedre livskvalitet – uanset om du deltager i arrangementer, hjælper med kommunikation eller blot har tid til en snak og et nærværende øjeblik.
    </div>

  </div>
</section>

<section class="form-volunteer-section">
  <div class="container">
    <h3>Din tid gør en forskel</h3>
    <p>
     Hos Tidslerne værdsætter vi hver en frivillig indsats: stor som lille. <br/>
     Når du vælger at engagere dig, er du med til at skabe håb, fællesskab og nærvær for mennesker ramt af kræft. <br/>
     Tak fordi du overvejer at være en del af vores fællesskab.
    </p>
  </div>
</section>

<section class="volunteer-form">
  <div class="container">
    <h2>Interesseret i at blive frivillig?</h2>
    <p>Udfyld formularen herunder, og vi kontakter dig hurtigst muligt.</p>
    <?php echo do_shortcode('[wpforms id="82"]'); ?>
  </div>
</section>

<?php get_footer(); ?>
