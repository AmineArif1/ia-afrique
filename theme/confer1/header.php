<header class="header-area">
    <div class="classy-nav-container breakpoint-off">
      <div class="container">

        <nav class="classy-navbar justify-content-between" id="conferNav">

          <a class="nav-brand" href="index.php"><img src="img/res/ensamlogo.png" alt="" width="150"
              height="150"></a>
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <div class="classy-menu">

            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <div class="classynav">
              <ul id="nav">
                <li <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="active underlined"    <?php   }  ?>><a href="index.php">Accueil</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/themes.php") { ?>  class="active underlined"   <?php   }  ?> ><a href="themes.php">Thèmes</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/inscription-soumission.php") { ?>  class="active underlined"   <?php   }  ?>><a href="inscription-soumission.php">Inscription & Soumission</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/conferencier.php") { ?>  class="active underlined"   <?php   }  ?>><a href="conferencier.php">Conferenciers</a></li>
                <li ><a href="comite-organisation.php#">Comité</a>
                  <ul class="dropdown">
                    <li <?php if($_SERVER['SCRIPT_NAME']=="/comite-scientifique.php") { ?>  class="active underlined"   <?php   }  ?>><a href="comite-scientifique.php">- Scientifique</a></li>
                    <li <?php if($_SERVER['SCRIPT_NAME']=="/comite-organisation.php") { ?>  class="active underlined"   <?php   }  ?> ><a href="comite-organisation.php">- Organisation</a></li>

                  </ul>
                </li>
              </ul>
            </div>

          </div>
        </nav>
      </div>
    </div>
  </header>
