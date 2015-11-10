<?php include "templates/header.php";?>
<style type="text/css">

/* Button */

.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 50%;
  vertical-align: middle;
  color: #fff;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  border-bottom: 2px solid #B67731; //#3160B6;
  cursor: pointer;
  transition: all 0.15s ease;
}
.button:focus { outline: 0; }


/* Button modifiers */

.buttonBlue {
  background:#DA9B56; //4a89dc;
  text-shadow: 1px 1px 0 rgba(204, 109, 39, 0.5); //rgba(39, 110, 204, .5);
}

.buttonBlue:hover { 
  background: #D89135; //#357bd8; 
}


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
</style>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <!--Menu Area-->
	<?php include "templates/menu.php";?>
	<?php include "templates/side_menu.php";?>
  <?php
      $get_total_rows = 0;
      $results = "SELECT COUNT(*) FROM products";
      $retval = mysql_query($results,$link);
      if($retval){
      $get_total_rows = mysql_fetch_row($retval); 
      }

      //break total records into pages
      $total_pages = ceil($get_total_rows[0]/$item_per_page); 

   ?>
   <!--Menu Area-->

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-wear-section" style="background: url('images/24.png') center top no-repeat;">
          <div class="android-wear-band">
            <div class="android-wear-band-text">
              <div class="mdl-typography--display-2 mdl-typography--font-thin">The best of Konnect Farm</div>
              <p class="mdl-typography--headline mdl-typography--font-thin">
                We are offer better marketing Access services and location of products for buyers and seller. Farmers are able to exactly poin point the location of existing products through GPS and geotagging pictures.
              </p>
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                  See what's new in the Farmers Store&nbsp;<i class="material-icons">chevron_right</i>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Farmer's Store</div>
          <div class="android-card-container mdl-grid" id="results">

          </div>
          <div align="center">
          <button class="button buttonBlue load_more" id="load_more_button">Load More Products
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
          </button>
          <div class="animation_image" style="display:none;"><img src="images/ajax-loader.gif"></div>
          </div>
      <script type="text/javascript">
          $(document).ready(function() {

            var track_click = 0; //track user click on "load more" button, righ now it is 0 click
            var total_pages = <?php echo $total_pages; ?>;
            $('#results').load("assets/fetch_products.php", {'page':track_click}, function() {track_click++; }); //initial data to load

            $(".load_more").click(function (e) { //user clicks on button
              $(this).hide(); //hide load more button on click
              $('.animation_image').show(); //show loading image
              if(track_click <= total_pages) //make sure user clicks are still less than total pages
              {
                //post page number and load returned data into result element
                
                $.post('assets/fetch_products.php',{'page': track_click}, function(data) {
                
                  $(".load_more").show(); //bring back load more button
                  
                  $("#results").append(data); //append data received from server
                  
                  //scroll page to button element
                  $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
                  
                  //hide loading image
                  $('.animation_image').hide(); //hide loading image once data is received
            
                  track_click++; //user click increment on load button
                
                }).fail(function(xhr, ajaxOptions, thrownError) { 
                  alert(thrownError); //alert any HTTP error
                  $(".load_more").show(); //bring back load more button
                  $('.animation_image').hide(); //hide loading image once data is received
                });
                
                
                if(track_click >= total_pages-1)
                {
                  //reached end of the page yet? disable load button
                  $(".load_more").attr("disabled", "disabled");
                  $("#load_more_button").text("No more products to be viewed!");
                }
               }
                
              });
          });
          </script>
<?php include "templates/footer.php";?>