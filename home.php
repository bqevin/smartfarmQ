<?php include "templates/header.php";?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Menu Area-->
    <?php include "templates/profile_menu.php";?>
    <?php include "templates/side_profile_menu.php";?>
    <!--Menu Area-->
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
        </div>
        <div class="android-screen-section mdl-typography--text-center">
          <a name="screens"></a>
          <div class="mdl-typography--display-1-color-contrast">Ultimate Web for Smart Farmers</div>
          <div class="android-font android-slogan" style="padding-top: 25px; color:#84B611;">With a glance know...</div>
          <div class="android-font android-sub-slogan" style="padding-top: 10px; color:#84B611;">What is needed, where, when, in what quantity and quality</div>
          <p> You can also Aggregate different commodities to reduce transport cost </p>
          <div class="android-screens">
            <div class="android-wear android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/egg1.png">
                <img class="android-screen-image" src="images/hen1.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Poultry</a>
            </div>
            <div class="android-phone android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/grocery.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Vegetables</a>
            </div>
            <div class="android-tablet android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/grains.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Grains</a>
            </div>
            <div class="android-tv android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/livestock.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Livestock</a>
            </div>
            <div class="android-auto android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/deliv.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase mdl-typography--text-left" href="">Introducing Transport Industry</a>
            </div>
          </div>
        </div>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Highlighted Commodities</div>
          <div class="android-card-container mdl-grid">
            <?php
              $qry = "SELECT * FROM products ORDER BY type_id DESC LIMIT 4";
              $retval = mysql_query($qry,$link);
              if(!$retval)
              {
                die('cannot fetch data:'.mysql_error());

              }
              while($row = mysql_fetch_array($retval,MYSQL_ASSOC))
              {
               echo '<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                      <div class="mdl-card__media">
                        <img src="data:image;base64,'.$row['photo'].'">
                      </div>
                      <div class="mdl-card__title">
                         <h4 class="mdl-card__title-text">'.$row['type'].'</h4>
                      </div>
                      <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead">'.$row['description'].'</span>
                <div class="android-drawer-separator"></div>
                <p style="margin:0px;"><b>Volume(Amount): </b>'.$row['amount'].'</p>
                <p><b>Price: </b>'.$row['price'].'</p>
                      </div>
                      <div class="mdl-card__actions">
                         <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                           Contact : '.$row['fname'].'
                           <i class="material-icons">chevron_right</i>
                         </a>
                      </div>
                    </div>';
              }
            ?>
          </div>
        </div>
        
<?php include "templates/footer.php";?>