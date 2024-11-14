<<?php require_once('.\assets\layout\header.php')?>


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Kontakt</span>
        <h2>Kontakt</h2>
        <p>Zur Kontaktaufnahme stehen Ihnen folgende Optionen zur Verfügung</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Adresse</h3>
              <p>Altensenner Weg 53, 32052 Herford, Deutschland</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Rufen Sie uns an</h3>
              <p>+49 190 666 666</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Per E-Mail</h3>
              <p>Daniel@Gerking.de</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2450.7985051370733!2d8.653655889191416!3d52.10159858045276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ba143bfec8d6cb%3A0xde5021fbc1e1b345!2sAltensenner%20Weg%2053%2C%2032052%20Herford!5e0!3m2!1sde!2sde!4v1731580493172!5m2!1sde!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Ihr Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Ihre E-Mail" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Betreff" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Ihre Nachricht" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Laden</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Vielen Dank für Ihre Nachricht</div>

                  <button type="submit">Nachricht absenden</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
</body>
</html>

<?php require_once('.\assets\layout\footer.php')?>