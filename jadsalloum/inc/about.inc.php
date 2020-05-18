<div class="container-fluid p-0">
<?php $result = $pdo->query("SELECT * FROM about");
$about = $result->fetch(PDO::FETCH_OBJ)?>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php echo $about->prenom ?>
          <span class="text-primary"><?php echo $about->nom ?></span>
        </h1>
        <div class="subheading mb-5"><?php echo $about->adresse ?>
          <a href="mailto:<?php echo $about->mail ?>"><?php echo $about->mail ?></a>
        </div>
        <p class="lead mb-5"><?php echo $about->description ?></p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>