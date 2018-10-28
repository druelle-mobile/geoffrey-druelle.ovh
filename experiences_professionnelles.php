<?php include ("header.php"); ?>

  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header" id="pro">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Expériences Professionnelles</span>
            <?php include ("navigation_drawer.php"); ?>

      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <!--Carousel Wrapper-->
          <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
              <!--Indicators-->
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                  <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>
              <!--/.Indicators-->
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                  <!--First slide-->
                  <div class="item active">
                      <div class="carousel-caption d-none d-md-block">
                        <section class="entete">
                          <div class="btn-group">
                              <a href="https://www.timcod.fr/" target="_blank" id="link"
                              class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                  <i class="material-icons">public</i>
                              </a>
                          </div>
                          <h3>Timcod</h3>
                          <div class="infos">
                              <small class="text-muted"><i class="material-icons">schedule</i> Juillet 2018 - Aujourd'hui</small>
                              <small class="text-muted"><i class="material-icons">place</i> Treillières, France</small>
                          </div>
                        </section>
                        <h2 class="mdl-card__title-text">Développeur Android / Support N2</h2>
                        <p>Assurer le Support N2 : gestion des tickets d'incident (logiciel, matériel, etc). Développement de divers projets Android.</p>
                        <h4>Réalisations :</h4>
                        <ul>
                          <li>Développement d'applications Android<ul>
                            <li>Android Architecture Components :<ul>
                              <li>Room</li>
                              <li>LiveData</li>
                              <li>Databinding</li>
                              <li>ViewModel</li>
                              <li>Lifecycle</li>
                              <li>Navigation</li>
                            </ul></li>
                            <li>Material Design</li>
                            <li>EMDK Zebra</li>
                            </ul></li>
                          <li>Gestion des tickets d'incident escaladés au Support N2 :<ul>
                            <li>Résolution de bugs sur les solutions logicielles Timcod : Android, Windows CE/Mobile, PHP</li>
                            <li>Logiciels d'étiquetage et d'impression : Bartender, Nicelabel</li>
                            <li>Paramétrage et dépannage de terminaux mobiles professionnels (Zebra, Honeywell, Datalogic...)</li>
                            <li>Paramétrage et dépannage d'imprimantes professionnelles (Zebra, Sato...)</li>
                            <li>Paramétrage et dépannage de hardware réseau (Extreme Networks, Cisco...)</li>
                          </ul></li>
                          <li>SOTI - MobiControl (et autres MDM)</li>
                          <li>Android Enterprise</li>
                          <li>Kiosque</li>
                          <li>Veille régulière sur les nouvelles technologies utilisées dans le monde de la mobilité</li>
                        </ul>
                      </div>
                  </div>
                  <!--/First slide-->
                  <!--Second slide-->
                  <div class="item">
                      <div class="carousel-caption d-none d-md-block">
                        <section class="entete">
                          <div class="btn-group">
                              <a href="https://itwapp.io/" target="_blank" id="link"
                              class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                  <i class="material-icons">public</i>
                              </a>
                          </div>
                          <h3>InterviewApp</h3>
                          <div class="infos">
                              <small class="text-muted"><i class="material-icons">schedule</i> Janvier - Mai 2017</small>
                              <small class="text-muted"><i class="material-icons">place</i> Tours, France</small>
                          </div>
                        </section>
                        <h2 class="mdl-card__title-text">Développeur Android, Stage</h2>
                        <p>Développement de l’application Android d’InterviewApp. Le principe de la solution est de pouvoir permettre des entretiens vidéos différés. Le « candidat » répondant à des questions dans un temps imparti, questions et temps de réponse préalablement établis par les entreprises qui font appel à cette solution.</p>
                        <h4>Réalisations :</h4>
                        <ul>
                          <li>Travail en autonomie totale à partir simplement d’un prototype réalisé sous Flinto par un graphiste</li>
                          <li>Méthode agile avec réalisation de versions de tests </li>
                          <li>Découverte d’Android Studio via des cours et TP qui n’avaient pas encore été dispensés et via OpenClassrooms dans un premier temps</li>
                          <li>Organisation des fichiers XML et Java, organisation des ressources</li>
                          <li>Utilisation de librairies telles que ButterKnife, Retrofit, Dagger/Dagger2, Picasso, et diverses petites librairies plus modestes pour obtenir certaines résultats graphiques (sur des ViewPagerIndicators par exemple)</li>
                          <li>Travail approfondi sur :
                            <ul>
                              <li>Fragments</li>
                              <li>Camera API et Camera2 API</li>
                              <li>MediaRecorder</li>
                              <li>Permissions</li>
                              <li>ConstraintLayout et CoordinatorLayout</li>
                              <li>NavigationDrawer</li>
                              <li>Swipes</li>
                              <li>Popups</li>
                            </ul></li>
                          <li>Début de recherches sur REST</li>
                          <li>Sensibilité particulière vis-à-vis du Material Design de Google</li>
                          <li>Veille régulière sur les nouvelles technologies utilisées dans le monde de la mobilité</li>
                        </ul>
                      </div>
                  </div>
                  <!--/Second slide-->
                  <!--Third slide-->
                  <div class="item">
                      <div class="carousel-caption d-none d-md-block">
                        <section class="entete">
                          <div class="btn-group">
                              <a href="http://www.openip.fr/" target="_blank" id="link"
                              class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                  <i class="material-icons">public</i>
                              </a>
                          </div>
                          <h3>OpenIP</h3>
                          <div class="infos">
                            <small class="text-muted"><i class="material-icons">schedule</i> Octobre 2015 - Juillet 2016</small>
                            <small class="text-muted"><i class="material-icons">place</i> Saint-Avertin, France</small>
                          </div>
                        </section>
                        <h2 class="mdl-card__title-text">Technicien de production VoIP & Internet</h2>
                        <p>Assurer la mise en production des services proposés à la clientèle en renforçant l’équipe ADV-Production. Chaque service ayant ses spécificités, nombreuses documentations techniques à assimiler. Plusieurs semaines au support technique pour se familiariser aux diverses solutions. Mission parallèle et essentielle de la mise à jour de la base de données des numéros d’urgence (PDAAU).</p>
                        <h4>Réalisations :</h4>
                        <ul>
                          <li>Mise en production de services VoIP (Trunk SIP, Centrex, MetaCentrex, MyCloud3CX)</li>
                          <li>Mise en production de liens Internet (ADSL, SDSL, VDSL, Fibre)</li>
                          <li>Paramétrage de routeurs propriétaires sous FreeBSD et de modems, expédition des commandes (QOS, routage, VPN, etc)</li>
                          <li>Mise en place de machines virtuelles pour les clients (firewall et routage)</li>
                          <li>Hotline et Dépannage N1 et N2</li>
                          <li>Assistance à l’installation des services via téléphone et TeamViewer</li>
                          <li>Gestion et attribution de numéros géographiques et non-géographiques</li>
                          <li>Gestion et Alimentation de la base de données des numéros d’urgence, en contact direct avec les préfectures françaises. Création de scripts pour accélérer et optimiser le traitement des données reçues.</li>
                          <li>Rédaction de documentations internes</li>
                        </ul>
                      </div>
                  </div>
                  <!--/Third slide-->
                  <!--Fourth slide-->
                  <div class="item">
                      <div class="carousel-caption d-none d-md-block">
                        <section class="entete">
                          <div class="btn-group">
                              <a href="https://www.netixia.fr/" target="_blank" id="link"
                              class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                  <i class="material-icons">public</i>
                              </a>
                          </div>
                          <h3>Netixia</h3>
                          <div class="infos">
                            <small class="text-muted"><i class="material-icons">schedule</i> Avril - Août 2015</small>
                            <small class="text-muted"><i class="material-icons">place</i> Saint-Avertin, France</small>
                          </div>
                        </section>
                        <h2 class="mdl-card__title-text">Administration Systèmes et Réseaux, Stage</h2>
                        <p>Préparer la migration des serveurs DNS. Se familiariser aux DNS, proposer de nouvelles architectures DNS, préparer les migrations de serveurs, sécuriser. Initiation aux serveurs de mails et à Zimbra.</p>
                        <h4>Réalisations :</h4>
                        <ul>
                          <li>Création de serveurs DNS, paramétrage et tests de différentes solutions</li>
                          <li>Création de serveurs SMTP</li>
                          <li>Propositions de nouvelles architectures DNS pour remplacer l’architecture vieillissante</li>
                          <li>Réflexions autour de la stratégie à employer afin de procéder à une migration propre des serveurs</li>
                          <li>Rédaction de documentations internes et de compte-rendu de réunions</li>
                          <li>Virtualisation de serveurs sur un ESXI dédié</li>
                          <li>Initiation au monitoring de serveurs via Nagios</li>
                        </ul>
                      </div>
                  </div>
                  <!--/Fourth slide-->
                  <!--Fifth slide-->
                  <div class="item">
                      <div class="carousel-caption d-none d-md-block">
                        <section class="entete">
                          <div class="btn-group">
                              <a href="https://www.cefe.cnrs.fr/fr/" target="_blank" id="link"
                              class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                  <i class="material-icons">public</i>
                              </a>
                          </div>
                          <h3>CEFE, CNRS</h3>
                          <div class="infos">
                            <small class="text-muted"><i class="material-icons">schedule</i> Janvier - Avril 2014</small>
                            <small class="text-muted"><i class="material-icons">place</i> Montpellier, France</small>
                          </div>
                        </section>
                        <h2 class="mdl-card__title-text">Assistant de Recherches, Stage</h2>
                        <p>Stage en génétique des populations sur la Tortue d’Hermann (Testudo hermanni)</p>
                        <h4>Réalisations :</h4>
                        <ul>
                          <li>Génétique des populations & Biologie Moléculaire (extractions d’ADN sur des échantillons de sang prélevés sur le terrain)</li>
                          <li>Tests des échantillons extraits via électrophorèses en gel d’agarose</li>
                          <li>Utilisation de PCR pour amplifier les loci de microsatellites</li>
                          <li>Envoi en laboratoire spécialisé pour génotypage</li>
                          <li>Analyse des résultats du génotypage sur logiciel spécialisé</li>
                          <li>Analyses statistiques des résultats observés</li>
                          <li>Lecture et analyse de nombreuses publications scientifiques (majoritairement en Anglais)</li>
                          <li>Rédaction de mémoire de fin d’études</li>
                          <li>Co-auteur d'une publication scientifique actuellement en cours de review dans le « Journal of Heredity »</li>
                        </ul>
                      </div>
                  </div>
                  <!--/Fifth slide-->
                  <!--Sixth slide-->
                  <div class="item">
                      <div class="carousel-caption d-none d-md-block">
                        <section class="entete">
                          <div class="btn-group">
                              <a href="http://umr5023.univ-lyon1.fr/" target="_blank" id="link"
                              class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                  <i class="material-icons">public</i>
                              </a>
                          </div>
                          <h3>LEHNA, CNRS</h3>
                          <div class="infos">
                            <small class="text-muted"><i class="material-icons">schedule</i> Avril - Mai 2013</small>
                            <small class="text-muted"><i class="material-icons">place</i> Lyon, France</small>
                          </div>
                        </section>
                        <h2 class="mdl-card__title-text">Assistant de Recherches, Stage</h2>
                        <p>Stage d’écologie comportementale sur les facteurs influençant la reproduction chez le Sonneur à ventre jaune (Bombina variegata)</p>
                        <h4>Réalisations :</h4>
                        <ul>
                          <li>Sorties terrain intensives en Ardèche</li>
                          <li>Création d’enclos semi-artificiels avec bassins sur un terrain privé réservé aux tests</li>
                          <li>Maintenance de spécimens en captivité et semi-captivité (nettoyage, nourrissage, sexage, mesures de poids et taille hebdomadaires pour surveiller l’état de santé des individus)</li>
                          <li>Surveillance des spécimens et de leurs comportements lorsque ceux-ci étaient en semi-captivité (à toute heure de la journée et de la nuit)</li>
                          <li>Analyses statistiques des résultats obtenus</li>
                          <li>Lecture et analyse de nombreuses publications scientifiques (majoritairement en Anglais)</li>
                          <li>Rédaction de mémoire</li>
                          <li>Travail d’équipe</li>
                        </ul>
                      </div>
                  </div>
                  <!--/Sixth slide-->
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
          </div>
          <!--/.Carousel Wrapper-->
        </div>
      </main>
    </div>

    <?php include ("footer.php"); ?>
