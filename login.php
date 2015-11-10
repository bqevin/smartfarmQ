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
	to 	{ width: 0; background: transparent; }
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
	<?php include "templates/menu.php";?>
	<?php include "templates/side_menu.php";?>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
		  <div class="android-customized-section" style="background:rgb(102, 51, 0) none repeat scroll 0% 0%;">
          <div class="android-customized-section-text">
          	<hgroup>
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast" style="padding:0px; margin:0px; color:#fff;">Welcome smart farmer,</div>	
			 <!--  <h1>Material Design Form</h1> -->
			  <h3 style="margin:0px; padding:0px;">join other members!</h3>
			</hgroup>
			<form method="post" action="assets/direct_login_action.php">
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