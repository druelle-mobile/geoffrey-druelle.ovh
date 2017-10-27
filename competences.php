<?php include ("header.php"); ?>

    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header" id="competences">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Compétences</span>
      <?php include ("navigation_drawer.php"); ?>

      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#langages-panel" class="mdl-tabs__tab is-active">Langages</a>
                <a href="#sgbd-panel" class="mdl-tabs__tab">SGBD</a>
                <a href="#outils-panel" class="mdl-tabs__tab">Outils</a>
                <a href="#reseaux-panel" class="mdl-tabs__tab">Réseaux-internet</a>
                <a href="#environnement-panel" class="mdl-tabs__tab">Environnements</a>
                <a href="#autres-panel" class="mdl-tabs__tab">Autres</a>
            </div>

            <div class="mdl-tabs__panel is-active" id="langages-panel">
              <img class="logo" title="Android" src="images/android.png" alt="logo android">
              <img class="logo" title="Java" src="images/java.png" alt="logo java">
              <img class="logo" title="Shell" src="images/shell.png" alt="logo shell">
              <img class="logo" title="C#" src="images/c-sharp.png" alt="logo c#">
              <img class="logo" title="HTML5" src="images/html5.png" alt="logo html5">
              <img class="logo" title="CSS3" src="images/css3.png" alt="logo css3">
              <img class="logo" title="JavaScript" src="images/javascript.png" alt="logo javascript">
              <img class="logo" title="PHP" src="images/php.png" alt="logo php">
            </div>
            <div class="mdl-tabs__panel" id="sgbd-panel">
              <!-- <ul> -->
                <!-- <li>MySQL</li>
                <li>MS SQL Server</li> -->
                <img class="logo" title="MySQL" src="images/MySQL.png" alt="logo mysql">
                <img class="logo" title="Microsoft SQL Server" src="images/SQLServer.png" alt="logo sqlserver">
              <!-- </ul> -->
            </div>
            <div class="mdl-tabs__panel" id="outils-panel">
              <!-- <ul> -->
                <!-- <li>Android Studio</li>
                <li>Eclipse</li>
                <li>Visual Studio</li> -->
                <img class="logo" title="Android Studio" src="images/android_studio.png" alt="logo Android Studio">
                <img class="logo" title="Eclipse" src="images/eclipse.png" alt="logo eclipse">
                <img class="logo" title="Visual Studio" src="images/visual_studio.png" alt="logo visual_studio">
              <!-- </ul> -->
            </div>
            <div class="mdl-tabs__panel" id="reseaux-panel">
              <ul>
                <li>DNS</li>
                <li>DHCP</li>
                <li>SMTP</li>
                <li>LAN</li>
                <li>TCP/IP</li>
                <li>Apache</li>
              </ul>
            </div>
            <div class="mdl-tabs__panel" id="environnement-panel">
              <!-- <ul> -->
                <!-- <li>Linux</li>
                <li>Windows</li>
                <li>Android</li>
                <li>Windows Phone</li> -->
                <img class="logo" title="Linux" src="images/linux.png" alt="logo linux">
                <img class="logo" title="Ubuntu" src="images/ubuntu.png" alt="logo ubuntu">
                <img class="logo" title="Windows" src="images/windows.png" alt="logo windows">
                <img class="logo" title="Android" src="images/android.png" alt="logo android">
                <img class="logo" title="Apple" src="images/apple.png" alt="logo apple">
              <!-- </ul> -->
            </div>
            <div class="mdl-tabs__panel" id="autres-panel">
              <!-- <ul> -->
                <!-- <li>Virtualisation Vmware / Virtualbox</li>
                <li>Monitoring Nagios</li> -->
                <img class="logo" title="VMware" src="images/vmware.png" alt="logo vmware">
                <img class="logo" title="VirtualBox" src="images/virtualbox.png" alt="logo virtualbox">
                <img class="logo" title="Nagios" src="images/nagios.png" alt="logo nagios">
              <!-- </ul> -->
            </div>
          </div>
        </div>
      </main>
    </div>

<?php include ("footer.php"); ?>
