		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="copyright" content="" />
		<meta name="application-name" content="" />
		<!-- for Facebook -->          
		<meta property="og:title" content="Home-Working with us" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/hand.png" />
		<meta property="og:url" content="http://theaccidentguys.co.uk/App/workwithTAG/INDEX.PHP" />
		<meta property="og:description" content="Download our app" />
		<link rel="icon" type="image/png" href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png" sizes="16x16">
		<!-- for Twitter -->          
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:image" content="" />
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	 	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	    <link rel="stylesheet" type="text/css" href="/css/st.css">
	    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	    <!--<script type="text/javascript" src="/js/scriptme.js"></script>!-->
	    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
    <script src="/js/app.js"></script>
	    <script type="text/javascript" src="https://cdn.rawgit.com/vinayakjadhav/jR3DCarousel/master/dist/jR3DCarousel.min.js"></script>
	    <script type="text/javascript" src="https://cdn.rawgit.com/vinayakjadhav/jR3DCarousel/v0.0.8/dist/jR3DCarousel.min.js"></script>

            <script type="text/javascript">
            $(document).ready(function(){
    // with minimal configuration and default setting
    //  $('.jR3DCarouselGallery').jR3DCarousel({ slides: slides });
    // Or with options
        var slides = [];
    for ( var i = 0; i < 7; i++) {
                slides.push({src: 'https://unsplash.it/'+(1366+i)+'/'+(768+i)})
        }
        $('.jR3DCarouselGallery').jR3DCarousel({
                                // largest allowed width
              height: 400,              // largest allowed height
                  // "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio)
        animation: 'slide3D', // slide | slide3D | scroll | scroll3D | fade
              animationCurve: 'ease',
              animationDuration: 1000,
              animationInterval: 5000,
              autoplay: true,
               "slideLayout": "cover",
              onSlideShow: shown,        // callback when Slide show event occurs
              "navigation": null, // circles | squares */
    "slides": [

        {
            "src": "/img_slide/img1.jpg"
        },
        {
            "src": "/img_slide/img2.jpg"
        }

    ]        });
        
    function shown(slide){
            console.log("Slide shown: ", slide.find('img').attr('src'));
        }
  });
        </script>
