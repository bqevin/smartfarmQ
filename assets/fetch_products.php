<?php
      include('connect.php');
            //sanitize post value
      $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

      //throw HTTP error if page number is not valid
      if(!is_numeric($page_number)){
        header('HTTP/1.1 500 Invalid page number!');
        exit();
      }

      //get current starting point of records
      $position = ($page_number * 8);

      $qry = "SELECT * FROM products ORDER BY type_id DESC LIMIT $position, $item_per_page";
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