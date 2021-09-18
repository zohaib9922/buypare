<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BuyPare</title>

        <!-- Custom Theme files -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
        <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
        <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
        <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
        <link href="css/mb-min.css" rel="stylesheet" type="text/css" media="all"> 
        <link href="css/products-list.css" rel="stylesheet" type="text/css" media="all"> 
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{!! asset('/css/mb.css') !!}" rel="stylesheet"><!-- carousel slider -->  
        <link href="{!! asset('/css/mbs.css') !!}" rel="stylesheet"><!-- carousel slider -->
        <link href="{!! asset('/css/mbpro.css') !!}" rel="stylesheet"><!-- carousel slider -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- //Custom Theme files -->
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script> 
        <!-- //js --> 
        <!-- web-fonts -->

        <!-- web-fonts -->

        {{-- <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'> --}}
        
        <link rel="icon" type="image/png" href="images/fav-icon.jpeg" sizes="96x96">

        <!-- web-fonts --> 
        <script src="js/owl.carousel.js"></script>  
        <script>
        $(document).ready(function() { 
            $("#owl-demo").owlCarousel({ 
              autoPlay: 3000, //Set AutoPlay to 3 seconds 
              items :4,
              itemsDesktop : [640,5],
              itemsDesktopSmall : [480,2],
              navigation : true
         
            }); 
        }); 
        </script>
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
        <!-- start-smooth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>	
        <script type="text/javascript" src="js/typehead.js"></script>
        <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){		
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
        </script>
        
        <!-- //countdown.js -->
	    <!-- menu js aim -->
	    <script src="js/jquery.menu-aim.js"> </script>
	    <script src="js/main.js"></script> <!-- Resource jQuery -->
	    <!-- //menu js aim --> 
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
        <script src="js/bootstrap.js"></script>	
        {{-- <script type="text/javascript" src="js/ajax.js"></script>	 --}}
        <script data-ad-client="ca-pub-8128676451831979" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="index-opt-1 catalog-product-view catalog-view_op1">


        <div class="wrapper">
            @include('includes.header')

                <div class="site-content-contain {{ Route::currentRouteName() }}">
                    @yield('content')
                </div>

            @include('includes.footer')


            <!--back-to-top  -->
            <a href="#" class="back-to-top">
                <i aria-hidden="true" class="fa fa-angle-up"></i>
            </a>

        </div>

    </body>

   @yield('jsContent')
</html>
    
