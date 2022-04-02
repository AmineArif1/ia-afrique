<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php");?>
<body>
<?php include_once("header.php");?>
  <section class="contact-our-area section-padding-100-0">
    <div class="container">
      <div class="row">

        <div class="col-12">

            <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- This is just some spacing  -->
            </div>
          <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">


          </div>
        </div>
      </div>

      <div class="row justify-content-between">

        <div class="col-12 col-sm-3">
          <div class="contact-information mb-100">

            <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
           <h2>Soumission</h2>
            <p class="wow fadeInUp" data-wow-delay="300ms">
              Les auteurs sont invités à soumettre leur articles à IA-Afrique 2022 par le biais du système de <u><a
                  href="index.php" style="color: black;">soumission en ligne</a></u>.<br><br>
              Veuillez télécharger la <u><a href="index.php" style="color: black;">template</a></u>.<br><br>
              Soumission de projets : veuillez remplir <u><a href="index.php" style="color: black;">le
                  formulaire</a></u>.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-8">
        <span><h2>Inscription</h2><span>
          <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
            <div class="contact_form">

              <form action="mail.php" method="post" id="main_contact_form">
                <div class="contact_input_area">
                  <div id="success_fail_info"></div>
                  <div class="row">

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="first-name" id="name" placeholder="Prénom*"
                          required>
                      </div>
                    </div>

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="last-name" id="name2" placeholder="Nom*"
                          required>
                      </div>
                    </div>

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail*"
                          required>
                      </div>
                    </div>

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="universite" id="subject"
                          placeholder="Etablissement/Organisme*" required>
                      </div>
                    </div>

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="ville" id="subject"
                          placeholder="Ville*" required>
                      </div>
                    </div>

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="pays" id="subject"
                          placeholder="Pays*" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn confer-btn">Soumettre</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include_once("footer.php");?>

</body>
</html>
