<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Top Bar -->
<div class="top-bar">
  <div class="top-bar-inner">
    <a href="/webbutik">webbutik</a>
    <a href="/kredsadministration">kredsadministration</a>
    <a href="/medlemsportalen">medlemsPortalen</a>
  </div>
</div>

<!--  Main navigation -->
<header class="main-header">
  <div class="main-header-inner">
    <div class="logo">
    <a href="<?php echo home_url(); ?>">
  <img src="http://tidslerne.local/wp-content/uploads/2025/05/logohorizontalwebbanners-scaled-e1747228180331.png" alt="Tidslerne logo">
</a>

    </div>
    <div class="mobile-menu-toggle" id="menu-toggle"><i class="fas fa-bars"></i></div>
    <nav class="main-nav" id="main-nav">
      <ul>
        <li><a href="/nyheder">Nyheder</a></li>
        <li><a href="/bliv-frivillig">Frivilligt</a></li>
        <li><a href="/kontakt">Kontakt</a></li>
        <li><a href="/om-os">Om os</a></li>
      </ul>
    </nav>

    <div class="header-actions">
      <a href="/log-in" class="btn gray">Log in</a>
      <a href="/bliv-medlem" class="btn magenta">Bliv medlem</a>
      <a href="/stot-os" class="btn green">Støt os</a>
    </div>
  </div>
</header>

<!-- Lower Nav Row -->
<div class="lower-nav">
  <ul class="lower-menu">
  <li class="has-dropdown">
  <a href="/behandlinger">Behandlinger <span class="arrow">▼</span></a>
  <ul class="dropdown">
    <li><a href="/konventionel-behandlinger">Konventionel</a></li>
    <li><a href="/komplementaer-behandling">Komplementær</a></li>
    <li><a href="/udlandet">I udlandet</a></li>
    <li><a href="/patienthistorier">Patienthistorier</a></li>
  </ul>
</li>


    <li class="phone-center">
  <div>
    <p>Ring til Tidsellinjen</p>
    <strong>7020 0515</strong>
  </div>
</li>


<li class="has-dropdown right-align">
  <a href="#">Arrangementer <span class="arrow">▼</span></a>
  <ul class="dropdown">
    <li><a href="/kommende-arrangementer">Kommende arrangementer</a></li>
    <li><a href="/tidligere-arrangementer">Tidligere arrangementer</a></li>
  </ul>
</li>

  </ul>
</div>



