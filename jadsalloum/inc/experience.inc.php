<hr class="m-0">

<?php $result = $pdo->query("SELECT * FROM experience WHERE titre != ''") ?>
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Experience</h2>

        <?php
        while ($experience = $result->fetch(PDO::FETCH_OBJ)) { ?>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $experience->titre ?></h3>
            <div class="subheading mb-3"><?php echo $experience->sous_titre ?></div>
            <p><?php echo $experience->competances_acquises ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $experience->periode ?></span>
          </div>
        
        </div>
        <?php } ?>
      </div>

    </section>