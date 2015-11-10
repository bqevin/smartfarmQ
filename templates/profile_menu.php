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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="home.php">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="profile.php">My Profile</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="post_products.php">New Product</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Review Products</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href=""></a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href=""></a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href=""></a>
            </nav>
          </div>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item"><a href="assets/logout.php" style="text-decoration:inherit; color:inherit;">Logout</a></li>
            <li class="mdl-menu__item"><a href="lists.php" style="text-decoration:inherit; color:inherit;">Get All Products</a></li>
            <li class="mdl-menu__item"><a href="post_products.php" style="text-decoration:inherit; color:inherit;">Post New Products</a></li>
            <li disabled class="mdl-menu__item">FAQs</li>
          </ul>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/konnect-logo.png">
          </span>
        </div>
      </div>