<?php include("inc/header.inc.php"); ?>


<?php 
if(!empty($_POST) && isset($_POST['save']))
{
    $result = $pdo->query("INSERT INTO experience (titre, sous_titre, competances_acquises, periode) VALUES ('$_POST[titre]', '$_POST[sous_titre]', '$_POST[competances_acquises]', '$_POST[periode]')");
} ?>

<?php if(empty($_GET)){?>
    <div class="starter-template">  
        <form method="POST" action="" enctype='multipart/form-data'>

            <div class="form-group">
                <label for="titre">Titre du paragraphe</label>
                <input type="texte" class="form-control" id="titre" name="titre">
            </div>

            <div class="form-group">
                <label for="sous_titre">Sous-titre du paragraphe</label>
                <input type="texte" class="form-control" id="sous_titre" name="sous_titre">
            </div>

            <div class="form-group">
                <label for="competances_acquises">Contenu du paragraphe</label>
                <textarea rows="10" class="form-control" id="competances_acquises" name="competances_acquises"></textarea>
            </div>

            <div class="form-group">
                <label for="periode">Periode de l'evenement</label>
                <input type="texte" class="form-control" id="periode" name="periode">
            </div>

            <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>

        </form>
    </div>
<?php } 
else{?>
    <div class="starter-template">  
        <form method="POST" action="" enctype='multipart/form-data'>

            <div class="form-group">
                <label for="titre">Titre du paragraphe</label>
                <input type="texte" class="form-control" id="titre" name="titre">
            </div>

            <div class="form-group">
                <label for="sous_titre">Sous-titre du paragraphe</label>
                <input type="texte" class="form-control" id="sous_titre" name="sous_titre">
            </div>

            <div class="form-group">
                <label for="competances_acquises">Contenu du paragraphe</label>
                <textarea rows="10" class="form-control" id="competances_acquises" name="competances_acquises"></textarea>
            </div>

            <div class="form-group">
                <label for="periode">Periode de l'evenement</label>
                <input type="texte" class="form-control" id="periode" name="periode">
            </div>

            <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>

        </form>
    </div>
<?php}?>
    

<br>
<br>
<br>

<?php
// Pendant la fonction, le code ne prend pas en compte la définition du pdo dans data.inc.php car c'est un environnement local. Je le remets donc ici.
//$pdo = new PDO("mysql:host=localhost;dbname=cv_jad", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
//$result = $pdo->query("SELECT * FROM experience WHERE titre != ''");
//$experience = $result->fetch(PDO::FETCH_OBJ);
//$result = $pdo->exec("DELETE FROM experience WHERE id_experience = $experience->id_experience");


      
$result = $pdo->query("SELECT * FROM experience WHERE titre != ''");
?> 
<?php
        $count = 0;
        while ($experience = $result->fetch(PDO::FETCH_OBJ)) { ?>
        <?php $count++; ?>
        <form method="GET" action="" enctype='multipart/form-data'>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-0"><?php echo $experience->titre ?></h3>
              </div>
              <button type="submit" class="btn btn-primary" name="delete">Supprimer</button>
            </div>
        </form>
        <?php
        if(!empty($_POST) && isset($_POST['delete'])){
        $result2 = $pdo->exec("DELETE FROM experience WHERE id_experience = $count");
        }

} ?>

<?php include("inc/footer.inc.php"); }?>