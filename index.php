<?php include "templates/header.php";?>
<style type="text/css">
* { box-sizing:border-box; }

/*body {
  font-family: Helvetica;
  background: #eee;
  -webkit-font-smoothing: antialiased;
}*/

hgroup { 
  text-align:center;
  margin-top: 4em;
}

h1, h3 { font-weight: 300; }

h1 { color: #636363; }

h3 { color: #8BC34A; }

#form {
  width: 380px;
  margin: 4em auto;
  padding: 3em 2em 2em 2em;
  background: #fafafa;
  border: 1px solid #ebebeb;
  box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}

.group { 
  position: relative; 
  margin-bottom: 45px; 
}

input {
  font-size: 18px;
  padding: 10px 10px 10px 5px;
  -webkit-appearance: none;
  display: block;
  background: #fafafa;
  color: #636363;
  width: 100%;
  border: none;
  border-radius: 0;
  border-bottom: 1px solid #757575;
}

input:focus { outline: none; }


/* Label */

label {
  color: #999; 
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  transition: all 0.2s ease;
}


/* active */

input:focus ~ label, input.used ~ label {
  top: -20px;
  transform: scale(.75); left: -2px;
  /* font-size: 14px; */
  color: #4a89dc;
}


/* Underline */

.bar {
  position: relative;
  display: block;
  width: 100%;
}

.bar:before, .bar:after {
  content: '';
  height: 2px; 
  width: 0;
  bottom: 1px; 
  position: absolute;
  background: #4a89dc; 
  transition: all 0.2s ease;
}

.bar:before { left: 50%; }

.bar:after { right: 50%; }


/* active */

input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }


/* Highlight */

.highlight {
  position: absolute;
  height: 60%; 
  width: 100px; 
  top: 25%; 
  left: 0;
  pointer-events: none;
  opacity: 0.5;
}


/* active */

input:focus ~ .highlight {
  animation: inputHighlighter 0.3s ease;
}


/* Animations */

@keyframes inputHighlighter {
  from { background: #4a89dc; }
  to  { width: 0; background: transparent; }
}


/* Button */

.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 100%;
  vertical-align: middle;
  color: #fff;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  border-bottom: 2px solid #3160B6;
  cursor: pointer;
  transition: all 0.15s ease;
}
.button:focus { outline: 0; }


/* Button modifiers */

.buttonBlue {
  background: #4a89dc;
  text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
}

.buttonBlue:hover { background: #357bd8; }


/* Ripples container */

.ripples {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background: transparent;
}


/* Ripples circle */

.ripplesCircle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  width: 0;
  height: 0;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.25);
}

.ripples.is-active .ripplesCircle {
  animation: ripples .4s ease-in;
}

.demo-card-square.mdl-card {
  width: 200px;
  max-height: 300px;
}

/* Ripples animation */

@keyframes ripples {
  0% { opacity: 0; }

  25% { opacity: 1; }

  100% {
    width: 200%;
    padding-bottom: 200%;
    opacity: 0;
  }
}
    /* ==========  Select Field ========== */

    /* Style Select Field */
    select {
    padding:10px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    font-size: large;
   /* -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;*/
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
    }

    /* Remove focus */
    select:focus {
      outline: none}

    /* Hide label */
    .mdl-selectfield label {display: none;}
    /* Use custom arrow */
    .mdl-selectfield select {appearance: none}
    .mdl-selectfield {
      font-family: 'Roboto','Helvetica','Arial',sans-serif;
      position: relative;
        &:after {
            position: absolute;
            top: 0.75em;
            right: 0.5em;
            /* Styling the down arrow */
            width: 0;
            height: 0;
            padding: 0;
            content: '';
            border-left: .25em solid transparent;
            border-right: .25em solid transparent;
            border-top: .375em solid $select-border-color;
            pointer-events: none; //rgb(102, 51, 0) none repeat scroll 0% 0%
        }

    }
    b{color: rgb(129, 61, 11);}
</style>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Menu Area-->
    <?php include "templates/menu.php";?>
    <?php include "templates/side_menu.php";?>
    <!--Menu Area-->
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-screen-section mdl-typography--text-center" style="background:url('images/yun_963.jpg') no-repeat scroll 0% 0% / cover; background-color: rgb(236, 224, 193) none repeat scroll 0% 0%;">
<!--          <a name="screens"></a>-->
          <div class="mdl-typography--display-1-color-contrast">Ultimate Web for Smart Farmers</div>
          <div class="android-font android-slogan" style="padding-top: 25px; color:#84B611; text-shadow: 2px 3px 1px rgb(22, 89, 9);">With a glance know...</div>
          <div class="android-font android-sub-slogan" style="padding-top: 10px; color:#84B611;">What is needed, where, when, in what quantity and quality</div>
          <p> You can also Aggregate different commodities to reduce transport cost </p>
        </div>
        <!--Start of tabbed data-->
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#starks-panel" class="mdl-tabs__tab is-active"> <strong style="font-weight: bold;">Aggregator</strong> </a>
            <a href="#lannisters-panel" class="mdl-tabs__tab"> <strong style="font-weight: bold;"> Register </strong></a>
            <a href="#targaryens-panel" class="mdl-tabs__tab"> <strong style="font-weight: bold;"> Login </strong></a>
        </div>

        <!--first item on Tab-->
        <div class="mdl-tabs__panel is-active" id="starks-panel">
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Filter Product Search</div>
            <form method="post" class="text-center" action="" width="100%" style="background: rgb(231, 202, 169);padding: 10px;">
            &nbsp; &nbsp; &nbsp; &nbsp;<select name="type" style="width:30%;">
              <option value="">Choose Product Type</option>
                      <option value="Horticulture">Holticultural product </option>
                      <option value="Cereals">Cereal product </option>
                      <option value="Fruits">Fruits </option>
                      <option value="Livestock">Livestock</option>
                      <option value="Poultry">Poultry </option>
                      <option value="Nuts">Nuts</option>
            </select> 
            &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
            <select name="village" style="width:30%;">
              <?php include "templates/districts.php";?>
            </select>
            &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="submit" name="search" class="button buttonBlue" style="width:19%;font-size: 20px;background: rgb(115, 197, 58) none repeat scroll 0% 0%;
text-shadow: 1px 1px 0px rgba(17, 89, 3, 0.5);border-color: -moz-use-text-color -moz-use-text-color rgb(85, 182, 49);"><i class="material-icons">search</i> Search
                <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
           </button>
            <!-- <button onclick="geoFindMe()" class="mdl-button mdl-button--fab ">
               <i class="material-icons">place</i>
            </button> -->
            </form>
          <!--Display search results-->
          <!--End display-->
          <div class="android-card-container mdl-grid">
          <div id="out"></div>
            <?php
            if (isset($_POST['search'])) {
              $type = $_POST['type'];
              $village = $_POST['village'];
              $qry = "SELECT * FROM products WHERE type = '$type' AND village = '$village' ORDER BY amount DESC LIMIT 4";
              $retval = mysql_query($qry,$link);
              if(!$retval)
              {
                die('cannot fetch data:'.mysql_error());

              }
              while($row = mysql_fetch_array($retval,MYSQL_ASSOC))
              {
                if ($row < 0) {
                  echo "No produce for the region";
                } else{
                  $type = $row['type'];
                  $village = $row['village'];
               echo '<div class="demo-card-square mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--2dp">
                      <div class="mdl-card__media mdl-card--expand">
                        <img src="data:image;base64,'.$row['photo'].'">
                      </div>
                      <div class="mdl-card__supporting-text">       
                    <div class=" mdl-card--border"></div>
                    <p style="margin:0px;"><b>Type : </b>'.$row['type'].'</p>
                    <p style="margin:0px;"><b>Vol(Amt): </b>'.$row['amount'].'</p>
                    <p><b>Price: </b>'.$row['price'].'</p>
                          </div>
                          <div class="mdl-card__actions mdl-card--border">
                             <a target="_blank" href="more_details.php?type='.$row['type'].'&village='.$row['village'].'" class="android-link mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-typography--text-uppercase" href="">
                               Contact : '.$row['fname'].'
                               <i class="material-icons">chevron_right</i>
                             </a>
                          </div>
                        </div>';
                  }
                

              }
            }    
            ?>
          </div>
        </div>
        </div>
        <!--end first item on Tab-->

        <!--Start of Second Tab-->
      <div class="mdl-tabs__panel" id="lannisters-panel">
      <hgroup>
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast" style="padding:0px; margin:0px; color:#000;">Register to be a smart farmer</div> 
       <!--  <h1>Material Design Form</h1> -->
        <h3 style="margin:0px; padding:0px;">get connected!</h3>
      </hgroup>
      <form method="post" id="form" action="assets/register_action.php">
        <div class="group">
          <input type="text"name="fname"><span class="highlight"></span><span class="bar"></span>
          <label>First Name</label>
        </div>
        <div class="group">
          <input type="text"name="lname"><span class="highlight"></span><span class="bar"></span>
          <label>Last Name</label>
        </div>
        <div class="group">
          <input type="email" name="email"><span class="highlight"></span><span class="bar"></span>
          <label>Email</label>
        </div>
        <div class="group">
          <input type="tel" name="pnumber"><span class="highlight"></span><span class="bar"></span>
          <label>Phone Number</label>
        </div>
        <div class="group">
          <input type="password"name="password"><span class="highlight"></span><span class="bar"></span>
          <label>Password</label>
        </div>
        <div class="group">
          <input type="text"name="county" ><span class="highlight"></span><span class="bar"></span>
          <label>County</label>
        </div>
        <div class="group">
            <div class="mdl-selectfield">
                <label>Residence District</label>
                <select class="browser-default" name="village">
                   <?php include "templates/districts.php";?>
                </select>
              </div>
          </div>
        <div class="group">
          <!-- Standard Select -->
          <div class="mdl-selectfield">
            <label>Standard Select</label>
            <select class="browser-default" name="type">
              <option value="" disabled selected>Choose who to register as</option>
             <option value="Buyer">Buyer</option>
            <option value="Supplier">Supplier</option>
            <option value="Transporter">Transporter</option>
            </select>
          </div>
        </div>
        <button type="submit" class="button buttonBlue"> Next Step
          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
      </form>
        </div>
        <!--End of Second tab-->

        <!--Start of tab three-->
        <div class="mdl-tabs__panel" id="targaryens-panel">
            <hgroup>
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast" style="padding:0px; margin:0px; color:#000;">Welcome smart farmer,</div> 
             <!--  <h1>Material Design Form</h1> -->
              <h3 style="margin:0px; padding:0px;">join other members!</h3>
            </hgroup>
            <form method="post"  id="form" action="assets/direct_login_action.php">
              <div class="group">
                <input type="email" name="email"><span class="highlight"></span><span class="bar"></span>
                <label>Email</label>
              </div>
              <div class="group">
                <input type="password"name="password"><span class="highlight"></span><span class="bar"></span>
                <label>Password</label>
              </div>
              <button type="submit" class="button buttonBlue">Login to Smart Farmer Account
                <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
              </button>
            </form>
        </div>
        <!--end of tab three-->
      </div>
        <!--End of tabbed data-->
        <script type="text/javascript">
      // <button onclick="getLocation()">Try It</button>
      // <div id="mapholder"></div>
          function geoFindMe() {
          var output = document.getElementById("out");

          if (!navigator.geolocation){
            output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
            return;
          }

          function success(position) {
            var latitude  = position.coords.latitude;
            var longitude = position.coords.longitude;

            output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

            var img = new Image();
            img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false";

            output.appendChild(img);
          };

          function error() {
            output.innerHTML = "Unable to retrieve your location";
          };

          output.innerHTML = "<p>Locating…</p>";

          navigator.geolocation.getCurrentPosition(success, error);
        }

        $(window, document, undefined).ready(function() {
              $('input').blur(function() {
                var $this = $(this);
                if ($this.val())
                  $this.addClass('used');
                else
                  $this.removeClass('used');
              });

              var $ripples = $('.ripples');

              $ripples.on('click.Ripples', function(e) {

                var $this = $(this);
                var $offset = $this.parent().offset();
                var $circle = $this.find('.ripplesCircle');

                var x = e.pageX - $offset.left;
                var y = e.pageY - $offset.top;

                $circle.css({
                  top: y + 'px',
                  left: x + 'px'
                });

                $this.addClass('is-active');

              });

              $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
                $(this).removeClass('is-active');
              });

            });
        </script>
<?php include "templates/footer.php";?>