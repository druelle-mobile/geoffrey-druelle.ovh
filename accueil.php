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
              <h2 class="mdl-card__title-text">Développeur Android natif</h2>
            </div>
            <div class="mdl-card__supporting-text home">
              <p>Bonjour Visiteur !</p>
              <hr>
              <p>Après une ré-orientation de l'Ecologie vers l'Informatique, et une première spécialisation dans l'Administration Systèmes et Réseaux, j'ai effectué une formation complémentaire en tant que Développeur Web & Logiciel au CEFIM (Tours, France).</p>
              <p>Je suis actuellement en poste chez Timcod (Treillières, 44) en tant que Développeur Android au Support N2.</p>
              <p>Si vous recherchez un mouton à 5 pattes, ne vous attardez pas ici. ;)
              <br>En revanche, si vous recherchez quelqu'un de motivé et de curieux, restez, et n'hésitez pas à me contacter !</p>
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
                <div class="coords"><small class="text-muted"><i class="material-icons">smartphone</i><a href="tel:+33768694753"> +33 7 68 69 47 53</a></small>
                <small class="text-muted"><i class="material-icons">email</i><a href="mailto:geoffrey@druelle.ovh">geoffrey@druelle.ovh</a></small>
                <small class="text-muted"><i class="material-icons">location_on</i> 75009 Paris</small>
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
