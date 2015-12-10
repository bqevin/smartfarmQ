      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <a href="index.php"><img class="android-logo-image" src="images/konnect-logo.png"></a>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field" />
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Home</a>
              <span class="mdl-navigation__link mdl-typography--text-uppercase" id="demo-menu-lower-left">Produce <!-- <i class="material-icons">expand_more</i> --></span>
                <!-- Left aligned menu below button -->
<!--                <button id="demo-menu-lower-left">-->
<!--                        class="mdl-button mdl-js-button mdl-button--icon">-->
<!--                  <i class="material-icons">more_vert </i>-->
<!--                </button>-->

                <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-left">
                  <li class="mdl-menu__item"><a style="text-decoration:none; color:inherit;" href="crops.php">Crops</a></li>
                  <li class="mdl-menu__item"><a style="text-decoration:none; color:inherit;" href="animals.php">Livestock</a></li>
                  <li disabled class="mdl-menu__item">Poultry</li>
                </ul>
              
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Buyers</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Suppliers</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Transporters</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Contact Us</a>
<!--              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Extension</a>-->
            </nav>
          </div>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
           <!--  <li class="mdl-menu__item"><a href="register.php" style="text-decoration:inherit; color:inherit;">Register</a></li> -->
            <li class="mdl-menu__item"><a href="login.php" style="text-decoration:inherit; color:inherit;">Login</a></li>
            <li class="mdl-menu__item"><a href="products.php" style="text-decoration:inherit; color:inherit;">Get Crops</a></li>
            <li class="mdl-menu__item"><a href="login.php" style="text-decoration:inherit; color:inherit;">Post Products</a></li>
            <li disabled class="mdl-menu__item">FAQs</li>
          </ul>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/konnect-logo.png">
          </span>
        </div>
      </div>