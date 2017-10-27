<?php include ("header.php"); ?>

  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header" id="index">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Accueil</span>
      <?php include ("navigation_drawer.php"); ?>

      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell--12-col">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">Développeur Mobile Junior</h2>
            </div>
            <div class="mdl-card__supporting-text home">
              <p>Bonjour Visiteur !</p>
              <hr>
              <p>Venant de terminer la formation de Développeur Logiciel au CEFIM (Tours, France), je recherche un emploi en tant que Développeur Mobile Junior.
              <br>Si vous recherchez un mouton à 5 pattes, ne vous attardez pas ici. ;)
              <br>En revanche, si vous recherchez quelqu'un de motivé et de curieux, restez, et n'hésitez pas à me contacter !</p>
              <p>Mes recherches s'orientent vers les villes (et agglomérations) suivantes : Tours, Nantes, Lyon, et Lausanne (Suisse).</p>
              <p>Je reste à votre entière disposition, par mail, téléphone, en face à face (autour d'un café, thé, d'une bière ou d'une tisane, tout dépend de l'humeur et de l'heure de la journée/soirée :)).</p>
              <p>Enfin, permettez-moi de vous souhaiter une excellente journée, et une agréable visite !</p>
            </div>
          </div>
          <div class="demo-cards mdl-cell--12-col mdl-cell--8-col-tablet">
            <div class="demo-card-image mdl-card mdl-shadow--2dp mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card__title mdl-card--expand"></div>
              <div class="mdl-card__actions">
                <span class="demo-card-image__filename">à propos de moi <small class="text-muted"><i class="material-icons">sentiment_very_satisfied</i></small></span>
              </div>
            </div>
            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card__supporting-text">
                <div class="coords"><small class="text-muted"><i class="material-icons">smartphone</i><a href="tel:+33677217860"> +336 77 21 78 60</a></small>
                <small class="text-muted"><i class="material-icons">email</i><a href="mailto:druelle.geoffrey@gmail.com">druelle.geoffrey@gmail.com</a></small>
                <small class="text-muted"><i class="material-icons">location_on</i><img class="flag" src="images/fr.svg" alt="flag france"></img> 25 rue du Colombeau,<br> 37390 La Membrolle Sur Choisille</small>
                <small class="text-muted"><i class="material-icons">location_on</i><img class="flag" src="images/ch.svg" alt="flag schweiz"></img> Chez Coralie Alarza,<br> Chemin du Parc 3,<br> 1030 Bussigny</small>
                <small class="text-muted"><i class="material-icons">directions_car</i> Permis B - Véhicule</small></div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  <?php include ("footer.php"); ?>
  </body>
</html>
