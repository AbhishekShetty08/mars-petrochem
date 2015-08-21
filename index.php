<!doctype html>
<!--[if lt IE 7 ]> <html class=ie6> <![endif]-->
<!--[if IE 7 ]> <html class=ie7> <![endif]-->
<!--[if IE 8 ]> <html class=ie8> <![endif]-->
<!--[if IE 9 ]> <html class=ie9> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<!--[if lt IE 9]>l
<script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script>
<![endif]-->
<meta charset="utf-8">
<title>Mars Petrochem</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="rating" content="general" />
<meta name="copyright" content="2014, mars petrochem" />
<meta name="revisit-after" content="7 Days" />
<meta name="expires" content="never" />
<meta name="distribution" content="global" />
<meta name="robots" content="index, follow" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<meta name="viewport" content-width="1240px">
<link type="text/css" rel="stylesheet" href="css/main.css" />
<link rel="shortcut icon" href="images/favicon.ico"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    <script type="text/javascript" src="js/ticker.js"></script>
    <script type="text/javascript" src="js/jquery.totemticker.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- End WOWSlider.com HEAD section -->

<script type="text/ecmascript">
$(function(){
			$('#vertical-ticker').totemticker({
				row_height	:	'260px',
				next		:	'#ticker-next',
				previous	:	'#ticker-previous',
				stop		:	'#stop',
				start		:	'#start',
				mousestop	:	true,
			});
		});
</script>

</head>

<body>
<div class="float header-bg">
<div class="auto2">
<div class="auto">
<div class="float">

<ul class="menu">
<li class="active"><a href="index.php">HOME</a></li>
<li><a href="about-us.php#about-us">PROFILE</a>
<ul class="dropmenu">
  <li><a href="about-us.php#about-us">About Us</a></li>
  <li><a href="our-mission.php#our-mission">Our Mission</a></li>
  <li><a href="our-vision.php#our-vision">Our Vision</a></li>
  <li><a href="our-people.php#our-people">Our People</a></li>
  <li><a href="Infrastructure.php#Infrastructure">Infrastructure</a></li>
  <li><a href="awards-and-accolades.php#awards">Awards and Accolades</a></li>
</ul>
</li>
<li><a href="industrial-lubricants.php#industrial-lubricantss">PRODUCT</a>
	<ul class="dropmenu">
      <li><a href="industrial-lubricants.php#industrial-lubricants">Industrial Lubricants</a></li>
      <li><a href="automotive-lubricants.php#automotive-lubricant">Automotive Lubricants</a></li>
      <li><a href="marine-lubricants.php#marine-lubricants">Marine Lubricants</a></li>
  </ul>
</li>
<li><a href="gallery.php#gallery">GALLERY</a></li>
<li><a href="events.php#events">EVENTS</a></li>
<li><a href="partners.php#partners">PARTNERS</a></li>
<li><a href="careers.php#careers">CAREERS</a></li>
<li><a href="contact-us.php#contact-us">CONTACT</a></li>
</ul>

<div class="right">
<ul class="links">
<li><a href="http://www.mobilindustrial.com/ind/english/productselector.aspx" target="_blank"><img src="images/blue-btn1-bg.png" width="205px" alt="product selector" title="Product Selector" /></a></li>
<li><a href="http://www.msds.exxonmobil.com/IntApps/psims/psims.aspx" target="_blank"><img src="images/blue-btn2-bg.png" width="150px" alt="Material Safety Data Sheet" title="Material Safety Data Sheet" /></a></li>
</ul>
</div>

<div class="float ">
<div id="mrova-feedback">
		
		<div id="mrova-form">
        <p class="call-back">Leave your details for our sales team to call back.</p>
			<form id="mrova-contactform" action="#" method="post">
				<ul >
					<li>
						<label for="mrova-name">Your Full Name</label> <input type="text" name="mrova-name" class="required" id="mrova-name" value="">
					</li>
					<li>
						<label for="mrova-email">Email</label> <input type="text" name="mrova-email" class="required" id="mrova-email" value="">
					</li>
                    <li>
						<label for="mrova-email">Contact No</label> <input type="text" name="mrova-email" class="required" id="mrova-email" value="">
					</li>
					<li>
						<label for="mrova-message">Message</label>
						<textarea class="required" id="mrova-message" name="mrova-message"  rows="4" cols="30" ></textarea>
					</li>
				</ul>
				<input type="submit" value="Send" id="mrova-sendbutton" name="mrova-sendbutton">
			</form>
		</div>
        <div id="mrova-contact-thankyou" style="display: none;">
			Thank you.  We'hv received your feedback.
		</div>
		<div id="mrova-img-control"></div>
	</div>
<script type="text/javascript">
(function ($) {
$.fn.vAlign = function() {
	return this.each(function(i){
	var h = $(this).height();
	var oh = $(this).outerHeight();
	var mt = (h + (oh - h)) / 2;	
	$(this).css("margin-top", "-" + mt + "px");	
	$(this).css("top", "50%");
	});	
};
$.fn.toggleClick = function(){
    var functions = arguments ;
    return this.click(function(){
            var iteration = $(this).data('iteration') || 0;
            functions[iteration].apply(this, arguments);
            iteration = (iteration + 1) % functions.length ;
            $(this).data('iteration', iteration);
    });
};
})(jQuery);
$(window).load(function() {
	//cache
	$img_control = $("#mrova-img-control");
	$mrova_feedback = $('#mrova-feedback');
	$mrova_contactform = $('#mrova-contactform');

	//setback to block state and vertical align to center
	$mrova_feedback.vAlign()
	.css({'display':'block','height':$mrova_feedback.outerHeight()});
	//Aligning feedback button to center with the parent div 

	$img_control.vAlign()
	//animate the form
	.toggleClick(function(){
		$mrova_feedback.animate({'right':'0px'},1000);
	}, function(){
		$mrova_feedback.animate({'right':'-'+$mrova_feedback.outerWidth()},1000);
	});

	//Form handling
	$('#mrova-sendbutton').click( function() {
				var url = 'send.php';
				var error = 0;
				
				
				
				$('.required', $mrova_contactform).each(function(i) {
					if($(this).val() === '') {
						error++;
					}
				});
				// each
				if(error > 0) {
					alert('Please fill in all the mandatory fields. Mandatory fields are marked with an asterisk *.');
				} else {
					$str = $mrova_contactform.serialize();

					//submit the form
					$.ajax({
						type : "GET",
						url : url,
						data : $str,
						success : function(data) {

							if(data == 'success') {
								// show thank you
								$('#mrova-contact-thankyou').show();
								$mrova_contactform.hide();
							} else {
								alert('Unable to send your message. Please try again.');
							}
						}
					});
					//$.ajax

				}
				return false;
			});

});
</script>


<div class="float">
<div class="left mt30">
<a href="index.php"><img src="images/logo.png" alt="logo" title="logo" /></a>
</div>
<div class="left mt50 ml40">
<img src="images/mobil-logo.png" alt="mobil" title="mobil" />
</div>

<div class="right mt25 phone">
<h6><img src="images/icon-1.png" alt="phone" title="phone"/>+91-22-65505615/07/08/+91-22-23723836</h6>
<h6><img src="images/icon-2.png" alt="email" title="email" /><a style="color:#333333;" href="mailto:info@marspetrochem.com">info@marspetrochem.com</a></h6>
</div>
</div>


</div>
</div>
</div>
</div>
</div>






<div class="float relative">
<div class="absolute">
<img src="images/awards.png" alt="awards" title="awards" />
</div>

<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/img1.jpg" alt="img1" title="img1" id="wows1_0"/></li>
<li><img src="data1/images/img4.jpg" alt="img4" title="img4" id="wows1_1"/></li>
<li><img src="data1/images/img1.jpg" alt="img1" title="img3" id="wows1_2"/></li>
<li><img src="data1/images/img4.jpg" alt="img4" title="img1" id="wows1_3"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="img1">1</a>
<a href="#" title="img4">2</a>
<a href="#" title="img1">3</a>
<a href="#" title="img4">4</a>
</div></div>
<!-- Generated by WOWSlider.com v3.4 -->
	<a href="#" class="ws_frame"></a>
	
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

</div>

<div class="float">
<div class="auto">
<div class="auto2">
<div class="float">
<ul class="clients">
<li><img src="images/icon-4.png" /></li>
<li><img src="images/client-1.png" /></li>
<div class="ver-divider"></div>
<li><img src="images/client-2.png" /></li>
<div class="ver-divider"></div>
<li><img src="images/client-3.png" /></li>
<div class="ver-divider"></div>
<li><img src="images/client-4.png" /></li>
<div class="ver-divider"></div>
<li><img src="images/client-5.png" /></li>
</ul>
</div>
</div>
</div>
</div>

<div class="float dark-green">
<div class="auto2">
<div class="auto">
<div class="float">
<div class="left mt15 mb5">
<img src="images/icon-3.png" alt="news"  title="news" />
</div>
<div class="float mt15 ml30" id="ticker">
<ul>
    <li><h5>Gulf Oil Lubri standalone Sep '14 sales at Rs 243.27 crore</h5>
    <span class="left">5.13 pm | 06 Nov 2014 |  Source: <a href="http://www.moneycontrol.com/">Moneycontrol.com</a></span>

    </li>
    <li><h5>Gulf Oil Lubri standalone Sep '14 sales at Rs 243.27 crore</h5>
    <span class="left">5.13 pm | 06 Nov 2014 |  Source: <a href="http://www.moneycontrol.com/">Moneycontrol.com</a></span>
   
    </li>
 </ul>
<a class="news-btn" href="#">VIEW ALL NEWS</a>
</div>
<script>
$(function() {
  $('#ticker').vTicker();
});
</script>

</div>
</div>
</div>
</div>



<div class="float middle-bg">
<div class="auto2">
<div class="auto">
<div class="float mt50">

<div class="float left grid1">
<h1 class="divider pb15">Welcome to Mars Petrochem Pvt Ltd</h1>
<p class="content mt15">Industrial Oil company, the parent company of Mars Petrochem Pvt Ltd was launched in the year 1938 before India attained Independence. The group has since been the leading distributors of Lubes in Western India for nearly 7 decades.
<br />
<br />
MARS Petrochem was dedicated to the philosophy supplying the world’s finest lubricants to the end users for the most critical lubrication needs, whether mineral or synthetic based.</p>

<a class="blue-btn" href="about-us.php#about-us">READ MORE</a>
</div>

<div class="float right grid2 red-bg">
<h2 class="mt5 ml10">Featured Product</h2>
<div class="left">
<p class="content grid3 product">Mobil 1 New Life 0W-40 is made with a proprietary blend of ultra high performance synthetic basestocks fortified with a precisely balanced component system. 
</p>
<a class="red-btn" href="#">READ MORE</a>
</div>

<div class="right oil-can">
<img src="images/oil-can.png" alt="oil-can" title="oil-can" />
</div>

</div>

<div class="float mt20">
<h3>Industries We Serve:</h3>
<div class="float divider"></div>
<div class="left grid4 mr30 mt30">
<img src="images/indus-lubri.png" alt="Industrial-Lubricants" title="Industrial-Lubricants" />
<h4 class="mt20">Our Industrial Lubricants are :</h4>
<ul class="type grid4">
<li>
<p class="content p25">Developed with close Original <br />Equipment Manufacturer (OEM) <br/>involvement.</p>
</li>
<div class="float divider"></div>
<li>
<p class="content p25">Engineered for excellence.</p>
</li>
<div class="float divider"></div>
<li>
<p class="content p25">Comprehensively lab and field tested.</p>
</li>
</ul>
<a class="offer-btn mt30" href="#">PRODUCTS OFFERED</a>
</div>

<div class="left grid4 mr30 mt30">
<img src="images/auto-lubri.png" alt="Automotive Lubricants" title="Automotive Lubricants" />
<p class="content mt20 p25">
Nothing works harder to keep your car, truck, van or SUV running smoothly than Mobil oils.
<br />
<br />
From conventional to fully synthetic, high-performance to high-mileage, Mobil has the type of oil you need to go the distance time & again.
</p>
<a class="offer-btn mt30" href="#">PRODUCTS OFFERED</a>
</div>

<div class="right grid4 mt30">
<img src="images/mari-lubri.png" alt="Marine Lubricants" title="Marine Lubricants" />
<p class="content mt20 p25">
ExxonMobil Marine Lubricants' high-quality products are protecting the engines and shipboard equipment of the world's most important fleets.
<br />
Our services, such as Signum Oil Analysis, are helping many customers monitor....... 
</p>
<a class="offer-btn mt30" href="#">PRODUCTS OFFERED</a>
</div>

</div>


</div>
</div>
</div>
</div>


<div class="float dark-green">
<div class="auto2">
<div class="auto">
<div class="float mt35">
<div class="left grid2">
<h4><span class="ml25">Testimonials</span></h4>
<ul id="vertical-ticker">
			
				<li><p class='testimonials'>“Since India is huge country with varied destinations and hotels/resorts to explore, your search for a paradisiacal destination ends at here.”</p>
		
				<span>Mr. XYZ</span></li>
                
                <li><p class='testimonials'>“Since India is huge country with varied destinations and hotels/resorts to explore, your search for a paradisiacal destination ends at here.”</p>
		
				<span>Mr. XYZ</span></li>
                
                <li><p class='testimonials'>“Since India is huge country with varied destinations and hotels/resorts to explore, your search for a paradisiacal destination ends at here.”</p>
		
				<span>Mr. XYZ</span></li>
                
                <li><p class='testimonials'>“Since India is huge country with varied destinations and hotels/resorts to explore, your search for a paradisiacal destination ends at here.”</p>
		
				<span>Mr. XYZ</span></li>
		
			
</ul>

<p class="controls"><a href="#" id="ticker-previous"><i class="fa fa-arrow-left"></i></a> <a href="#" id="ticker-next"><i class="fa fa-arrow-right"></i></a></p>


</div>

<div class="left grid2">
<h4><span class="ml25">NAVIGATE</span></h4>
<ul class="naviagte">
<li class="active2"><a href="index.php">Home</a></li>
<div class="float divider"></div>
<li><a href="about-us.php#about-us">Profile</a></li>
<div class="float divider"></div>
<li><a href="industrial-lubricants.php#industrial-lubricants">Products</a></li>
<div class="float divider"></div>
<li><a class="sheet" href="http://www.msds.exxonmobil.com/IntApps/psims/psims.aspx" target="_blank">Material Safety Data Sheet</a></li>
</ul>

<ul class="naviagte">
<li><a href="careers.php#careers">Careers</a></li>
<div class="float divider"></div>
<li><a href="http://www.mobilindustrial.com/ind/english/productselector.aspx" target="_blank">Product Selector</a></li>
<div class="float divider"></div>
<li><a href="gallery.php#gallery">Gallery</a></li>
<div class="float divider"></div>
<li ><a href="contact-us.php#contact-us">Contact</a></li>
</ul>
</div>

<div class="right grid2">
<h4><span class="ml30">CONTACT</span></h4>
<ul class="contact">
<li class="phone-icon"><p class="content ">Call Us At :<br />+91-22-65505615/07/08 </p>
<p  class="content">+91-22-23723836</p></li>
<div class="float divider"></div>
<li class="email-icon"><p class="content">Email Us Here :<br />info@marspetrochem.com</p></li>
</ul>

<ul class="social mb40">
<li><a href="#"><img src="images/facebook.png" alt="facebook" title="facebook"  id="fb" /></a></li>
<li><a href="#"><img src="images/twitter.png" alt="twitter" title="twitter" id="twitter" /></a></li>
<li><a href="#"><img src="images/in.png" alt="in" title="in" id="in" /></a></li>
</ul>
</div>

</div>
</div>
</div>
</div>

<script>
  $( "#fb" ).hover(
  function() {
    $("#fb").attr('src','images/facebook-hover.png');
  }, function() {
   $("#fb").attr( 'src','images/facebook.png' );
  }
);


  $( "#twitter" ).hover(
  function() {
    $("#twitter").attr('src','images/twitter-hover.png');
  }, function() {
   $("#twitter").attr( 'src','images/twitter.png' );
  }
);


  $( "#in" ).hover(
  function() {
    $("#in").attr('src','images/in-hover.png');
  }, function() {
$("#in").attr( 'src','images/in.png' );
  }
);
</script>
</body>
</html>