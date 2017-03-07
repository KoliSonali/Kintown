
<!DOCTYPE html>
<html>
<head>
<title>Kin Town</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
 <style>
 
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
}
.content {
    max-width: 650px;
    margin: auto;
    text-align: center;
}
</style>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
	 <div class="header-top">
		 <!--container-->
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
						<a href="#"><img src="images/koli.png" id="section-1" class="img-responsive" alt=""/></a>
						</div>
						<div class="menu">
						<ul id="nav">
							 <li><a href="#section-1">Home</a></li>
							 <li><a href="#section-0">BTS</a></li>
							 <li><a href="#section-2">Album</a></li>
							 <li><a href="#section-3">Gallery</a></li>
							 <li><a href="#section-4">Details</a></li>
							 <li><a href="#section-5">Contact</a></li>

							 <div class="clearfix"></div>
						 </ul>
						 </div>
			 </div>
			  <div class="clearfix"> </div>
			

		 </div>
		 <!--/container-->
	 </div>
<!--/sticky-->
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/bts.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Get introduced to Kpop</a></h2>
							<lable></lable>
							<h1><a href="#">KPOP MANIA</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/t2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">The princes of Kpop</a></h2>
							<lable></lable>
							<h1><a href="#">BANGTAN SEONYONDAN</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/t3.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">The idol group which topped Billboard</a></h2>
							<lable></lable>
							<h1><a href="#">MNET ARTIST OF THE YEAR 2016</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/t4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">The hearts of Armys worldwide</a></h2>
							<lable></lable>
							<h1><a href="#">BTS</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	


<!--/About-->
<!--top-tours-->	
<div  class="section" id="section-0">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>BANGTAN SEONYONDAN</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		  <div class="container">
				<p>The idol group that is BTS.</br>
				<strong>BANGTAN SEONYONDAN</strong>
				</p>
		  </div>
		  </div>

	     <div id="vid">
	     <div class="container" align="center">
 <video width="70%" height="70%" controls src="BTS.mp4"></video> </div> </div>
							<div class="content">
							<span> </span>
							<p><h4>Bangtan Hwaiting !</h4></p><br>
							<p><h4>ARMY Hwaiting !</h4></p>
							</div>

		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  

<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>ALBUM</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids grid2">
	
			 <h4><span class="icon3"></span>Studio</h4>
			 <p> <div class="list-group">
<a href="#" class="list-group-item"><audio controls src="songs/Look Here.mp3"></audio>Dark&Wild</a>
<a href="#" class="list-group-item"><audio controls src="songs/First Love.mp3"></audio>Wings</a>
<a href="#" class="list-group-item"><audio controls src="songs/Danger.mp3"></audio>Wake</a>
<a href="#" class="list-group-item"><audio controls src="songs/Wishing on a Star.mp3"></audio>Youth</a>
</div>
			 </p>
		 </div>
		 <div class="col-md-4 about-grids grid2">

			 <h4><span class="icon2"></span>Compilation</h4>
<p> <div class="list-group">
<a href="#" class="list-group-item"><audio controls src="songs/Rise of Bangtan.mp3"></audio>2Cool 4Skool / O!RUL8,2?</a>
<a href="#" class="list-group-item"><audio controls src="songs/For You.mp3"></audio>The Best of Bodan Shonendan -Japan Edition</a>
<a href="#" class="list-group-item"><audio controls src="songs/Love Is Not Over.mp3"></audio>Young Forever</a>
<a href="#" class="list-group-item"><audio controls src="songs/Just one day.mp3"></audio>The Best of Bangtan Sonyeondan -Korea Edition</a>
			 </div>
			 </p>
		 </div>
		 <div class="col-md-4 about-grids ">

			 <h4><span class="icon3"></span>Extended</h4>
<p> <div class="list-group">
<a href="#" class="list-group-item"><audio controls src="songs/NO.mp3"></audio>O!RUL8,2?</a>
<a href="#" class="list-group-item"><audio controls src="songs/Boy In Luv.mp3"></audio>Skool Luv Affair</a>
<a href="#" class="list-group-item"><audio controls src="songs/Run.mp3"></audio>The Most Beautiful Moment in Life, Part 1</a>
<a href="#" class="list-group-item"><audio controls src="songs/DOPE.mp3"></audio>The Most Beautiful Moment in Life, Part 2</a>
			 </div>
			 </p>
		 </div>
		 <div class="col-md-4 about-grids">

			 <h4><span class="icon2"></span>KSingle</h4>
<p> <div class="list-group">
<a href="#" class="list-group-item"><audio controls src="songs/No More Dream.mp3"></audio>No More Dream</a>
<a href="#" class="list-group-item"><audio controls src="songs/We Are Bulletproof Pt2.mp3"></audio>We Are Bulletproof Pt. 2</a>
<a href="#" class="list-group-item"><audio controls src="songs/War of Hormone.mp3"></audio>War of Hormone</a>
<a href="#" class="list-group-item"><audio controls src="songs/EPILOGUE - Young Forever.mp3"></audio>Epilogue: Young Forever</a>
			 </div>
			 </p>
		 </div>

		 		 <div class="col-md-4 about-grids">
			 <h4><span class="icon2"></span>Featured</h4>
			 <p> <div class="list-group">
<a href="#" class="list-group-item"><audio controls src="songs/Born Singer.mp3"></audio>Born Singer</a>
<a href="#" class="list-group-item"><audio controls src="songs/Blood, Sweat and Tears.mp3"></audio>Blood Sweat & Tears</a>
<a href="#" class="list-group-item"><audio controls src="songs/Tommorrow.mp3"></audio>Tomorrow</a>
<a href="#" class="list-group-item"><audio controls src="songs/Not Today.mp3"></audio>Not Today</a>
<!--<a href="#" class="list-group-item">Converse High</a>
<a href="#" class="list-group-item">Hold Me Tight</a>-->
			 </div>
			 </p>
		 </div>
		 		 <div class="col-md-4 about-grids">
			 <h4><span class="icon2"></span>J&KSingle</h4>
			 <p> <div class="list-group">
<a href="#" class="list-group-item"><audio controls src="songs/I NEED U.mp3"></audio><br>I Need U</a>
<a href="#" class="list-group-item"><audio controls src="songs/FIRE.mp3"></audio>Fire</a>
<a href="#" class="list-group-item"><audio controls src="songs/Butterfly.mp3"></audio>Butterfly</a>
<a href="#" class="list-group-item"><audio controls src="songs/Save ME.mp3"></audio>Save me</a>
			 </div>
			 </p>
		 </div>
	 </div>
</div>

<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>GALLERY</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		  <div class="container">
				<p>Exclusive Photos from BigHit Entertainment. The studio official photoshoots.</p>
		  </div>
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="jk jm v jn jh mn nm">ALL</span></li>
			<li><span class="filter" data-filter="jk">Jungkook</span></li>
			<li><span class="filter" data-filter="jm">Jimin</span></li>
			<li><span class="filter" data-filter="v">V</span></li>
			<li><span class="filter" data-filter="jn">Jin</span></li>
			<li><span class="filter" data-filter="jh">J-Hope</span></li>
			<li><span class="filter" data-filter="mn">Suga</span></li>
			<li><span class="filter" data-filter="nm">Rapmonster</span></li>
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="jk" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/jk.jpg" class="img-responsive" alt=""/></a>
							<div class="tour-caption">
							<span> </span>
							<p>Jeon Jungkook</p>
							</div>

						</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="jm" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/jm.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Park Jimin</p>
						     </div>

						</div>
					</div>		
					<div class="portfolio card mix_all" data-cat="v" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/v.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Kim Taehyung</p>
							 </div>
						</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="jn" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/jn.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							<p>Kim Seokjin</p>
							</div>
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="jh" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/jh.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Jung Hoseok</p>
							 </div>
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="mn" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/mn.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							<p>Min Yoongi</p>
							</div>
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="nm" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/nm.jpg" class="img-responsive" alt=""/></a>
							<div class="tour-caption">
							<span> </span>
							<p>Kim Namjoon</p>s
							</div>
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="mn" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/agustd.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span></span>
							 <p>Agust D</p>
							 </div>
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
	});				
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	}
};
// Run the show!
		filterList.init();
	});	
</script>
<!--Gallery Script Ends-->	 
<!--/top-tours-->
<div class="tour-guides section" id="section-4" >
	  <div class="tour-guides-head text-center">
		  <h3>DETAILS</h3>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p>The details of Bangtan Seonyondan , the lovely BTS, group details, members, songs and albums all in one place. A adobe for all the Armys.</p>
		  </div>
	  </div>
	  <div class="container">
		<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>

			<!-- //requried-jsfiles-for owl -->
		  <div id="owl-demo" class="owl-carousel">
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">BTS</a></p>
					 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Jungkook</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Jimin</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
				 <p><a href="#">Jin</a></p>
				 </div> 
			  </div>
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">J-Hope</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">V</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Suga</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Rapmonster</a></p>
				 </div>   
			  </div>
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Album</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Songs</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Awards</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">BigHit</a></p>
				 </div>   
			  </div>   
			 <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Hyung</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Maknae</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Army</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Bangtan Bomb</a></p>
				 </div>   
			  </div>
			  <div class="item text-center guide-slide">
			  <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Dance</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Solo</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Rap</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/bangtan.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Visual</a></p>
				 </div> -->
			  </div>
		  </div>
		</div>
</div>
<!--client-say-->
<div class="client-say">
	 <div class="client-say-layer">
	     <div class="client-say-head text-center">
			  <h3>BTS LINES</h3>
			  <span></span><img src="images/face.png" alt=""><span></span>
			  <!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo1").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			 <!-- //requried-jsfiles-for owl -->
		     <div id="owl-demo1" class="owl-carousel">
				  <div class="item">
					  <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">I wannna, big house, big cars and big rings. But, actually I dont have any big dreams.<img src="images/dots2.png" alt="#"></p>
							<h4>No More Dream</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				   <div class="item">
					  <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">I pulled all-nighters at practice rooms instead of school, dancing and singing. When you guys partied, I gave up sleep for my dreams. I spent all night holding a pen, closing my eyes only after the morning sun rises.<img src="images/dots2.png" alt="#"></p>
							<h4>We are Bulletproof pt 2</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				   <div class="item">
					   <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">A good house,a good car, Will these things bring happiness? In SeoulTo the SKY, will parents really be happy?<img src="images/dots2.png" alt="#"></p>
							<h4>NO</h4>
						    <h6><span></span></h6>
					   </div> 
				  </div>
				  <div class="item">
<div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">But your wings are wings of the devil. In front of your sweet is bitter bitter. <img src="images/dots2.png" alt="#"></p>
							<h4>Blood, Sweat & Tears</h4>
						    <h6><span></span></h6>
					   </div> 
				  </div>
<div class="item">
<div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">Follow your dream like breaker. Even if it breaks down, oh better.Follow your dream like breaker. Even if it breaks down, don’t ever run backwards, never. Because the dawn right before the sun rises is the darkest. Even in the far future, never forget the you of right now. Wherever you are right now, you’re just taking a break. Don’t give up, you know.<img src="images/dots2.png" alt="#"></p>
							<h4>Tomorrow</h4>
						    <h6><span></span></h6>
					   </div> 
				  </div>

				  <div class="item">
					  <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">Forever we are young; Under the flower petals raining down I run, so lost in this maze. Forever we are young, even when I fall and hurt myself I keep running toward my dream.<img src="images/dots2.png" alt="#"></p>
						    <h4>Young Forever</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				  
			  </div>
          </div>
      </div>
</div>
<!--/client-say-->
<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>CONTACT US</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span>
		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4>Contact for further details</h4>
						<p>The world is small to not meet someone.</p>
						<h5><span class="img1"></span>(+1) 234 56 789&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;(+1) 234 56 780</h5>
						<h5><span class="img2"></span><a href="#">Sonali Koli</a></h5>
						<h5><span class="img3"></span>Kin town</h5>
				  </div>

				  <div class="clearfix"></div>
			  </div>
		  </div>
	  </div>
</div>
 <div style="clear:both"></div>

<?php include('bottom.php'); ?>
</div>
  
</body>
</html>