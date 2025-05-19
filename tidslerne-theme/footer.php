<footer class="site-footer">
  <div class="footer-inner">
    
    <!-- Left: Social Media -->
    <div class="footer-col social">
      <ul>
        <li><a href="#"><span class="icon-square"><i class="fab fa-facebook-f"></i></span>Facebook</a></li>
        <li><a href="#"><span class="icon-square"><i class="fab fa-instagram"></i></span>Instagram</a></li>
        <li><a href="#"><span class="icon-square"><i class="fab fa-youtube"></i></span>Youtube</a></li>
      </ul>
    </div>

    <!-- Center: Newsletter -->
    <div class="footer-col newsletter">
      <h4>Hold dig opdateret</h4>
      <p>Få ny viden, gode råd, nyt om aktiviteter og arrangementer via vores nyhedsbrev og sociale medier.</p>
      <p class="text">Skriv dig op til Tidslernes nyhedsbrev her og modtag gode råd, nyt om forskning, arrangementer m.m.</p>
      <a href="#" class="btn magenta">Tilmeld nyhedsbrev</a>
    </div>

    <!-- Right: Contact & Logo -->
    <div class="footer-col contact">
      <img src="http://tidslerne.local/wp-content/uploads/2025/05/logohorizontalwebbanners-scaled-e1747228180331.png" alt="Tidslerne logo">
      <p>Ådalsparken 29,<br>6710 Esbjerg V</p>
      <p><strong>Telefon:</strong> <span class="pink">8611 3244</span><br>
         <strong>Tidsellinjen:</strong> <span class="pink">7020 0515</span></p>
    </div>

  </div>

  <?php wp_footer(); ?>
</footer>
<script>
  document.getElementById('menu-toggle').addEventListener('click', function () {
    document.getElementById('main-nav').classList.toggle('show');
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const aboutImage = document.querySelector('.about-image');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
        }
      });
    }, { threshold: 0.4 });

    if (aboutImage) {
      observer.observe(aboutImage);
    }
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
        }
      });
    }, { threshold: 0.4 });

    const section = document.querySelector('.actor-section');
    if (section) {
      observer.observe(section);
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const patientSection = document.querySelector('.patient-section');

    if (patientSection) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate');
          }
        });
      }, { threshold: 0.4 });

      observer.observe(patientSection);
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const historySection = document.querySelector('.history-section');

    if (historySection) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate');
          }
        });
      }, { threshold: 0.4 });

      observer.observe(historySection);
    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const faders = document.querySelectorAll('.volunteer-image');

    const appearOnScroll = new IntersectionObserver(function (entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-in');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    faders.forEach(fader => {
      appearOnScroll.observe(fader);
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const observers = document.querySelectorAll('.om-image');

    const appearOnScroll = new IntersectionObserver(function (entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-in');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    observers.forEach(el => {
      appearOnScroll.observe(el);
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const fadeSection = document.querySelector('.more-facts-section');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          fadeSection.classList.add('animate');
          observer.unobserve(fadeSection);
        }
      });
    }, {
      threshold: 0.2
    });

    if (fadeSection) {
      observer.observe(fadeSection);
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const filterDropdown = document.getElementById('filter');
    filterDropdown.addEventListener('change', function () {
      const selectedValue = this.value;
      if (selectedValue !== '#') {
        window.location.href = selectedValue;
      }
    });
  });
</script>

</body>
</html>

