
<!DOCTYPE html>
<html lang="en">
<head>
<title>BuyPare Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<link rel="icon" type="image/png" href="images/fav-icon.jpeg" sizes="96x96">
<!-- //Custom Theme files -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<script src="js/bootstrap.js"></script>
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
    
	$(document).ready(function(){
   
	   $('#search').keyup(function(){ 
		   var query = $(this).val();
		   if(query != '')
		   {
			  
			   var _token = $('input[name="_token"]').val();
			   $.ajax({
			   url:"{{ route('autocomplete.fetch') }}",
			   method:"POST",
			   data:{query:query, _token: '{{csrf_token()}}'},
			   success:function(data){
				   $('#products').fadeIn();  
						   $('#products').html(data);
				   }
			   });
		   }
	   });
   
	  $(document).on('click', 'li', function(){  
		  $('#search').val($(this).text());  
		  $('#products').fadeOut();  
	  }); 
	  
	  $("#search").focusout(function () {
		   $("#products").hide();
	   });
   
   });
   
   
   
   </script>

<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails",
		direction: "vertical"
	  });
// 	  let accordion = document.querySelector('.accordion-list');
// let items = accordion.querySelectorAll('li');
// let questions = accordion.querySelectorAll('.accordion-title');

// questions.forEach(question => question.addEventListener('click', toggleAccordion));

function toggleAccordion(){
    thisItem = this.parentNode;
    items.forEach(item => {
        if (thisItem == item){
            thisItem.classList.toggle('open');
            return;
        }
        item.classList.remove('open');
    })
}
	});
	
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<!-- scroll to fixed--> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>

<!-- //scroll to fixed--> 
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
	
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<!-- //smooth-scrolling-of-move-up -->  
<style>
	@import url("https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap");
* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  list-style: none;
  -webkit-transition: color .15s ease;
  transition: color .15s ease;
}



.accordion-container {
  width: 100%;
  margin: 0 auto;
}

.accordion-list {
  width: 90%;
}

.accordion-list li {
  border-bottom: 2px solid #e7e7e9;
}

.accordion-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 20px 0;
  cursor: pointer;
}



.accordion-title:hover {
  color: #f47c57;
}

.accordion-list p {
  max-height: 0;
  overflow: hidden;
  -webkit-transition: 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.accordion-list li.open h2 {
  font-weight: 600;
}

.accordion-list li.open p {
  max-height: 105px;
  padding-bottom: 20px;
}

.accordion-list li.open figure {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

@media (max-width: 1200px) {
  body {
    font-size: 10px;
  }
  .container {
    width: 80%;
    height: auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding: 20px;
  }
  .img-container,
  .img-box {
    display: none;
  }
  .img-container-mobile {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    width: 100%;
  }
  .img-girl-mobile {
    position: absolute;
    top: -125px;
  }
  .img-shadow-mobile {
    position: absolute;
    top: -20px;
  }
  .accordion-container {
    margin: auto;
    width: 90%;
    padding-top: 120px;
  }
  .accordion-list {
    width: 100%;
  }
  h1 {
    text-align: center;
  }
}
/*# sourceMappingURL=styles.css.map */
</style>
</head>
<body>
	<!-- header -->
	<div class="header">
		
		<div class="header-two"><!-- header-two -->
        <div class="container">
				<div class="header-logo">
					<a href="/"><img src="images/logo.png"></a>
				</div>	
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="my-account">
						<a href="/contact-us"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
					<div class="cart"> 
						<form action="#" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<!--	<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						-->	
						</form>  
					</div>
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
 
				</div>
				<div class="move-text">
					<div class="marquee"><a href="#"> BuyPare Presents New collections here...... <span>Get extra 10% off on everything Just bu signing in </span> <span> BuyPare provides a comprehensive analysis and comparison of millions of Products</span> <span> BuyPare includes prodcucts from Shoppe , Lazada and Many more websites</span> </a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header --> 
	<!-- breadcrumbs --> 
	
	<!-- //breadcrumbs -->
	<!-- products -->
	<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<h3 class="item_name product-title-detail">Electric Snow Blower</h3>
					<div class="col-md-2 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/s1.jpg">
									<div class="thumb-image detail_images"> <img src="images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="images/s2.jpg">
									 <div class="thumb-image"> <img src="images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="images/s3.jpg">
								   <div class="thumb-image"> <img src="images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-5 single-top-right">
						
						{{-- <p>Processing Time: Item will be shipped out within 2-3 working days. </p>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul>
								<li>$540</li>  
								<li><del>$600</del></li> 
								<li><span class="w3off">10% OFF</span></li> 
								<li>Ends on: June,5th</li>
								<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
							</ul>	
						</div>  --}}
						<p class="single-price-text">Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra. </p>
						<ul class="detail-ul">
							<li><img class="icons-detail" src="/images/store-icon.svg"><span>1 Seller at Lazada</span></li>
							<li><img class="icons-detail" src="/images/hands.svg"><span>From <b>RM 43412.12</b></span></li>
							<li><img class="icons-detail" src="/images/compare.svg"><span class="compare-title"><b>Compare 1 offer</b></span></li>
						</ul>
						
							<div class="col-md-3 right-border">
								<p>Screen Size</p>
								<p><b>15.6</b></p>
							</div>
							<div class="col-md-3 right-border">
								<p>OS</p>
								<p><b>Windows 10</b></p>
							</div>
							<div class="col-md-3 right-border">
								<p>Battery Life</p>
								<p><b>15h</b></p>
							</div>
							<div class="col-md-3">
								<p>Keyboard</p>
								<p><b>Yes</b></p>
							</div>
						
						
						{{-- <form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls_item" value="Snow Blower" /> 
							<input type="hidden" name="amount" value="540.00" /> 
							<button type="button" class="w3ls-cart" ><i class="fa fa-table" aria-hidden="true"></i> Show Comparisons</button>
						</form> --}}
						<button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Visit Store</button>
					</div>

					<div class="col-md-3 pd-0 custom-wd">
						<div class="card float-right">
							<div class="row">
							  <div class="col-sm-12">
								<div class="card-block">
								  <p><span class="company-icon card-icon"><img src="/images/shopee-icon.png"></span></p>
								  </br>
								  <div class="row">
									<div class="col-md-5">
										<p><b>Rating:</b> 5.0</p>
										<p><i class="fa fa-map-marker" aria-hidden="true"></i>  Local</p>
										<br>
									</div>
									<div class="col-md-7 mrm">
										<h3><b>RM 6,369.25</b></h3>
									</div>
								  </div>
								  <a href="#" class="btn store-btn btn-primary btn-sm float-right">Vist Store > </a>
								</div>
							  </div>
					   
							</div>
						  </div>
						</div>
					</div>
					
				   <div class="clearfix"> </div>  
				</div>
				{{-- <div class="single-page-icons social-icons"> 
					<ul>
						<li><h4>Share on</h4></li>
						<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
						<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
						<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
					</ul>
				</div> --}}
			</div> 
			<div class="container top-margin">
				{{-- <div class="img-container flex-column-center">
			
				<div class="accordion-container flex-column-center">
				  
				  <ul class="accordion-list">
					<li>
					  <div class="accordion-title">
						<h2>Compare</h2>
						<figure>
						  <svg width="10" height="7" xmlns="http://www.w3.org/2000/svg"><path d="M1 .799l4 4 4-4" stroke="#F47B56" stroke-width="2" fill="none" fill-rule="evenodd"/></svg>
						</figure>
					  </div>
					  <div class="row">
						{{-- <div class="col-md-3">
							<img src="images/s2.jpg" data-imagezoom="true" class="img-responsive" alt="" draggable="false">
						</div> --}}
						
						{{-- <div class="col-md-12">

							
								<p style="width:30%; float:left;"> 
									<img style="width: 80%;
									height: auto;" src="images/s3.jpg">
								</p>
								<p style="width:70%; float:left;">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								</br></br><i class="fa fa-briefcase" aria-hidden="true"></i> From RM 4</br>
								 <i class="fa fa-truck" aria-hidden="true"></i> Express delivery available</br>
								 <i class="fa fa-credit-card-alt" aria-hidden="true"></i> Online Banking, Debit/Credit Card</br>
								</br>
								 <a class="btn btn-success" href="#">Go to Store<i class="sprite-icons cI i-call-action-new"></i></a>
								</p>
							
							
						</div>
						
					  </div>
					</li>
				  </ul>
				</div>
				<!-- <figure class="img-box">
				  <svg width="191" height="184" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><filter x="-97.9%" y="-76.3%" width="295.8%" height="313.7%" filterUnits="objectBoundingBox" id="a"><feOffset dy="25" in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="25" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0.209139076 0 0 0 0 0.0691446444 0 0 0 0 0.478091033 0 0 0 0.497159091 0" in="shadowBlurOuter1"/></filter><path id="b" d="M0 27.756v53.87l41.968 24.035 47.387-28.025v-53.87"/></defs><g fill="none" fill-rule="evenodd"><g transform="translate(50.93 2.125)"><use fill="#000" filter="url(#a)" xlink:href="#b"/><use fill="#FF9271" xlink:href="#b"/></g><path fill="#DF5C34" fill-rule="nonzero" d="M92.899 53.917v53.87l47.387-28.026v-53.87z"/><path fill="#F47B56" fill-rule="nonzero" d="M50.93 29.88L99.624 2.126l40.662 23.767-47.387 28.025z"/><path d="M94.013 14.49a25.942 25.942 0 0114.207 3.129c2.486 1.462 3.844 2.988 4.036 4.579.192 1.59-.628 2.975-2.562 4.143a9.115 9.115 0 01-2.985 1.18c-.869.205-1.76.295-2.652.269l-.974-.077c.091.217.151.446.18.68a3.132 3.132 0 01-.513 1.552 5.704 5.704 0 01-2.1 2.065 12.633 12.633 0 01-6.7 1.77 13.247 13.247 0 01-6.957-1.757c-1.999-1.18-3.023-2.566-3.1-4.156a4.49 4.49 0 012.562-4.015 8.488 8.488 0 012.357-1.013 9.175 9.175 0 012.037-.346h.705l-1.282-.77 3.6-2.244 8.34 4.912a4.377 4.377 0 004.15 0c1.769-1.103 1.137-2.552-1.895-4.348a19.261 19.261 0 00-10.556-2.347 21.67 21.67 0 00-11.018 3.168c-3.023 1.89-4.522 4.143-4.496 6.76 0 2.564 1.601 4.848 4.714 6.682a21.015 21.015 0 0011.146 2.655 20.926 20.926 0 0011.017-2.925 12.353 12.353 0 003.062-2.565 5.683 5.683 0 001.28-2.18l.18-.808 4.753.269c.008.145.008.29 0 .436a8.216 8.216 0 01-.346 1.154 8.303 8.303 0 01-.82 1.72 11.912 11.912 0 01-1.69 2 15.952 15.952 0 01-2.755 2.13 25.602 25.602 0 01-9.326 3.36 35.176 35.176 0 01-10.877.192 24.896 24.896 0 01-9.339-3.053 12.127 12.127 0 01-5.304-5.566 8.192 8.192 0 010-6.593 12.692 12.692 0 015.266-5.759 28.966 28.966 0 0114.655-4.284zm4.663 13.262c-.17-.891-.77-1.64-1.601-2.001a6.579 6.579 0 00-3.33-.911 5.619 5.619 0 00-3.101.795 2.283 2.283 0 00-1.281 2.001c.117.89.69 1.654 1.512 2.014a6.54 6.54 0 003.394.86 6.092 6.092 0 003.254-.847 2.065 2.065 0 001.205-1.911" fill="#3E2928" fill-rule="nonzero"/></g></svg>
				</figure> -->
			  
			  </div> --}} 
			  <h3 class="w3ls-title">Comparison</h3>
			  <div class="col-md-12 pd-0">
				<div class="card float-right">
					<div class="row">
					  <div class="col-sm-12">
						
						<div class="card-block compare-card">
							<div class="col-md-3 mt-10">
								<p><span class="company-icon card-icon"><img src="/images/shopee-icon.png"></span></p>
								</br>
								<div class="row">
									<p><b>Apple Iphone Se (64Gb/128Gb/256Gb) Malaysia  Warranty 1 Year (Imported Set) Black,64GB</b></p>
								</div>
								
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="cN"> <div class="w-10-l sprite-icons cI i-delivery-truck mt01r mt01r-l"></div> <div class="cG w-90-l u"> <p><i class="fa fa-truck" aria-hidden="true"></i><span> From RM 4</span></p><p><span>1-7 working days</span></p><p><span>Express delivery available</span></p><p></p> </div> </div>
									<div class="cN"> <div class="w-10-l sprite-icons cI i-delivery-truck mt01r mt01r-l"></div> <div class="cG w-90-l u"> <p><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span> From RM 4</span></p><p><span>1-7 working days</span></p><p><span>Express delivery available</span></p><p></p> </div> </div>
								</div>
							</div>
							<div class="col-md-3 rm-section">
								<div class="row">
									<div class="col-md-12">
									</br>
								</br>
							
										<h3><b>RM 6,369.25</b></h3>
									</br>
										<p><b class="inside-b">Rating:</b> 5.0</p>
										<p><i class="fa fa-map-marker" aria-hidden="true"></i>  Local</p>
										<br>
									</div>
								  </div>
								
							</div>

							<div class="col-md-3">
								<div class="row">
								</br>
							</br>
						</br>
									<a href="#" class="btn store-btn btn-primary btn-sm float-right">Vist Store > </a>
								  </div>
								
							</div>

						<div>
					  </div>
			   
					</div>
				  </div>
				</div>

				<div class="card float-right">
					<div class="row">
					  <div class="col-sm-12">
						
						<div class="card-block compare-card">
							<div class="col-md-3 mt-10">
								<p><span class="company-icon card-icon"><img src="/images/shopee-icon.png"></span></p>
								</br>
								<div class="row">
									<p><b>ASUS Vivobook 15 K513E-Abn765Ts 15.6'' Fhd Laptop Indie Black ( I5-1135G7, 8Gb, 512Gb Ssd, Iris Xe, W10, Hs )</b></p>
								</div>
								
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="cN"> <div class="w-10-l sprite-icons cI i-delivery-truck mt01r mt01r-l"></div> <div class="cG w-90-l u"> <p><i class="fa fa-truck" aria-hidden="true"></i><span> From RM 4</span></p><p><span>1-7 working days</span></p><p><span>Express delivery available</span></p><p></p> </div> </div>
									<div class="cN"> <div class="w-10-l sprite-icons cI i-delivery-truck mt01r mt01r-l"></div> <div class="cG w-90-l u"> <p><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span> From RM 4</span></p><p><span>1-7 working days</span></p><p><span>Express delivery available</span></p><p></p> </div> </div>
								</div>
							</div>
							<div class="col-md-3 rm-section">
								<div class="row">
									<div class="col-md-12">
									</br>
								</br>
							
										<h3><b>RM 9969.05</b></h3>
									</br>
										<p><b class="inside-b">Rating:</b> 5.0</p>
										<p><i class="fa fa-map-marker" aria-hidden="true"></i>  Local</p>
										<br>
									</div>
								  </div>
								
							</div>

							<div class="col-md-3">
								<div class="row">
								</br>
							</br>
						</br>
									<a href="#" class="btn store-btn btn-primary btn-sm float-right">Vist Store > </a>
								  </div>
								
							</div>

						<div>
					  </div>
			   
					</div>
				  </div>
				</div>

				<div class="card float-right">
					<div class="row">
					  <div class="col-sm-12">
						
						<div class="card-block compare-card">
							<div class="col-md-3 mt-10">
								<p><span class="company-icon card-icon"><img src="/images/shopee-icon.png"></span></p>
								</br>
								<div class="row">
									<p><b>ASUS K513E-Abn765Ts/K513E-Abn766Ts/K513E-Abn767Ts – Intel I5-1135G7 |Ram 8Gb |512Gb Ssd |Intel Iris Xe | Laptop 15.6″</b></p>
								</div>
								
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="cN"> <div class="w-10-l sprite-icons cI i-delivery-truck mt01r mt01r-l"></div> <div class="cG w-90-l u"> <p><i class="fa fa-truck" aria-hidden="true"></i><span> From RM 4</span></p><p><span>1-7 working days</span></p><p><span>Express delivery available</span></p><p></p> </div> </div>
									<div class="cN"> <div class="w-10-l sprite-icons cI i-delivery-truck mt01r mt01r-l"></div> <div class="cG w-90-l u"> <p><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span> From RM 4</span></p><p><span>1-7 working days</span></p><p><span>Express delivery available</span></p><p></p> </div> </div>
								</div>
							</div>
							<div class="col-md-3 rm-section">
								<div class="row">
									<div class="col-md-12">
									</br>
								</br>
							
										<h3><b>RM 3369.30</b></h3>
									</br>
										<p><b class="inside-b">Rating:</b> 5.0</p>
										<p><i class="fa fa-map-marker" aria-hidden="true"></i>  Local</p>
										<br>
									</div>
								  </div>
								
							</div>

							<div class="col-md-3">
								<div class="row">
								</br>
							</br>
						</br>
									<a href="#" class="btn store-btn btn-primary btn-sm float-right">Vist Store > </a>
								  </div>
								
							</div>

						<div>
					  </div>
			   
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
			
			  
			<!-- recommendations -->
			<div class="recommend">
				<h3 class="w3ls-title">Our Recommendations </h3> 
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
				<div id="owl-demo5" class="owl-carousel">
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>20% <br> Off</h6></div>
							<a href="products1.html"><img src="images/f2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html">Women Sandal</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$20</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Women Sandal" /> 
									<input type="hidden" name="amount" value="20.00" /> 
									<button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
								</form>
							</div>        
						</div> 
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products.html"><img src="images/e4.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products.html">Digital Camera</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$80</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Digital Camera"/> 
									<input type="hidden" name="amount" value="100.00" /> 
									<button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
								</form>
							</div>         
						</div>  
					</div>  
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>New</h6></div>
							<a href="products4.html"><img src="images/s1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products4.html">Roller Skates</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$180</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Roller Skates"/> 
									<input type="hidden" name="amount" value="180.00" /> 
									<button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
								</form>
							</div>         
						</div>  
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products1.html"><img src="images/f1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html">T Shirt</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$10</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="T Shirt" /> 
									<input type="hidden" name="amount" value="10.00" /> 
									<button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
								</form>
							</div>        
						</div>    
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>New</h6></div>
							<a href="products6.html"><img src="images/p1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products6.html">Coffee Mug</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$14</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Coffee Mug" /> 
									<input type="hidden" name="amount" value="14.00" /> 
									<button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
								</form>
							</div>         
						</div>  
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>20% <br> Off</h6></div>
							<a href="products6.html"><img src="images/p2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products6.html">Teddy bear</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$20</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Teddy bear" /> 
									<input type="hidden" name="amount" value="20.00" /> 
									<button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
								</form>
							</div>        
						</div> 
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<a href="products4.html"><img src="images/s2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products4.html">Football</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$70</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Football"/> 
									<input type="hidden" name="amount" value="70.00"/>
									<button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
								</form>
							</div>        
						</div> 
					</div> 
					<div class="item">
						<div class="glry-w3agile-grids agileits"> 
							<div class="new-tag"><h6>Sale</h6></div>
							<a href="products3.html"><img src="images/h1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products3.html">Wall Clock</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$80</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Wall Clock" /> 
									<input type="hidden" name="amount" value="80.00" /> 
									<button type="button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Compare Product</button>
								</form>
							</div>         
						</div>  
					</div> 
				</div>    
			</div>
			<!-- //recommendations --> 

			<!-- offers-cards --> 
			
			<!-- //offers-cards -->
		</div>
	</div>
	

	<!--//products-->  
	<!-- footer-top -->
	
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<a href="/"><img src="images/logo.png"</a>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
						<li><i class="fa fa-mobile"></i> 333 222 3333 </li>
						<li><i class="fa fa-phone"></i> +222 11 4444 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="marketplace.html">Marketplace</a></li>  
							<li><a href="values.html">Core Values</a></li>  
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="login.html">Returns</a></li> 
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="sitemap.html">Site Map</a></li>
							<li><a href="login.html">Order Status</a></li>
						</ul> 
					</div>
										<!--
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>  
					</div>
				-->
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer --> 		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2021 BuyPare . All rights reserved | Design by Team Pr0-Techs</p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>