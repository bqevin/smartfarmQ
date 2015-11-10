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

form {
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
		  font-family: inherit;
		  background-color: transparent;
		  width: 100%;
		  padding: $select-padding 0;
		  font-size: $select-font-size;
		  color: $select-color;
		  border: none;
		  border-bottom: 1px solid $select-border-color;
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
		        pointer-events: none; 
		    }

		}
</style>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<?php include "templates/profile_menu.php";?>
	<?php include "templates/side_profile_menu.php";?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
		  <div class="android-customized-section" style="background:rgb(102, 51, 0) none repeat scroll 0% 0%;">
          <div class="android-customized-section-text">
          	<hgroup>
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast" style="padding:0px; margin:0px; color:#fff;">Commodity or Livestock Shot</div>	
			 <!--  <h1>Material Design Form</h1> -->
			  <h3 style="margin:0px; padding:0px;">Carriage space shot is awesome!</h3>
			</hgroup>
				<?php
				if(isset($_GET['msg']))
				{
					$message = $_GET['msg'];
					if($message==1)
					{
						echo"Uploaded successfully!";
					}
					if($message==2)
					{
						echo"Uploaded successfully!";
					}
				}
				?>
			<form method="post"action="assets/post_product_action.php" enctype="multipart/form-data">
			<select name="type">
			    <option > Choose Type of product </option>
				<option value="Horticulture">Holticultural product </option>
				<option value="Cereals">Cereal product </option>
				<option value="Fruits">Fruits </option>
				<option value="Livestock">Livestock</option>
				<option value="Poultry">Poultry </option>
				<option value="Nuts">Nuts</option>
			</select><br><br>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" name="price" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Price per Unit</label>
			  </div>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" name="amount" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Volume (Amt) e.g 100 Bags</label>
			  </div>
			<div class="mdl-textfield mdl-js-textfield">
		    <textarea name="description" class="mdl-textfield__input" type="text" maxlength="70" rows= "3" id="sample5" ></textarea>
		    <label class="mdl-textfield__label" for="sample5">Short Description</label>
		  </div>
			 <input type="file" name="image"/><br><br>
			  <button type="submit" name ="sumit" class="button buttonBlue">Post Product
			    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
			  </button>
			</form>
          </div>
          <div class="android-customized-section-image" style="background-image:url('images/login.png')"></div>
        </div>
<?php include "templates/footer.php";?>
 <script type="text/javascript">
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