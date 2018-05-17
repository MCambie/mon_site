<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CV Marie Cambie</title>
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
  </head>
  <body>
    <div class="page">
            <?php include('partials/header.php'); ?>
            <div class="contenu">
              <h1>Formulaire de contact</h1>
              <div class="texte">
              <form id="form" method="get" action="./index.html">
                    <p>
                      <label for="nom">Nom :</label>
                      <br>
                      <input type="text" id="nom" name="nom" tabindex="1" placeholder="Nom et Prénom"></input>
                    </p>
                    <p>
                      <label for="email">Email :</label>
                      <br>
                      <input type="text" id="email" name="email" tabindex="2"></input>
                    </p>
                    <p>
                      <label for="message">Message :</label>
                      <br>
                      <textarea id="message" name="message" tabindex="4" cols="50" rows="8"></textarea>
                      <br>
                    <input id="bouton" type="submit" name="envoi" value=" Envoyer"></input>
                    </p>
                </form>
              </div>
              <br>
              <br>
              <br>
            </div><!-- fin contenu -->
            <?php include('partials/footer.php'); ?>
    </div>
  </body>
</html>
