
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>Avita- Checkout Step 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

    <!--  Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>
    
    <!-- Twitter Bootstrap -->
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/responsive.css" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
    <!-- main styles -->
     
    <link href="stylesheets/main.css" rel="stylesheet">
     
    

    <!-- Modernizr -->
    <script src="js/modernizr.custom.56918.js"></script>    

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch/57.png">
    <link rel="shortcut icon" href="images/apple-touch/57.png">
  </head>

   
  <body class=" checkout-page">
    
    <div class="master-wrapper">
     
    
    
    <div class="container">
        <div class="row">
            
            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span12" style="margin-top: 120px;">
                
                <div class="checkout-container">
                    <div class="row">
                    	<div class="span10 offset1">
                    	    
                    	    <!--  ==========  -->
							<!--  = Header =  -->
							<!--  ==========  -->
                    		<header>
                    		    <div class="row">
                    		    	<div class="span2">
<!--                    		    		<a href="index.html"><img src="images/logo-bw.png" alt="Webmarket Logo" width="48" height="48" /></a>-->
                    		    	</div>
                    		    	<div class="span6">
                    		    	    <div class="center-align">
                    		    	        <h1><span class="light">آدرس ارسال و</span> پرداخت</h1>
                    		    	    </div>
                    		    	</div>
                    		    	<div class="span2">
                    		    	    <div class="right-align">
<!--                    		    	    	<img src="images/buttons/security.jpg" alt="Security Sign" width="92" height="65" />-->
                    		    	    </div>
                    		    	</div>
                    		    </div>
                    		</header>
                    		
                    		<!--  ==========  -->
							<!--  = Steps =  -->
							<!--  ==========  -->
                    		<div class="checkout-steps">
                    		    <div class="clearfix">
                    		    	<div class="step done">
                    		    	    <div class="step-badge"><i class="icon-ok"></i></div>
                    		    	    <a href="checkout-step-1.php">سبد خرید</a>
                    		    	</div>
                    		    	<div class="step active">
                    		    	    <div class="step-badge">2</div>
                    		    	    آدرس ارسال
                    		    	</div>

                    		    	<div class="step">
                    		    	    <div class="step-badge">3</div>
                    		    	    تایید و پرداخت
                    		    	</div>
                    		    </div>
                    		</div> <!-- /steps -->
                    		
						    <!--  ==========  -->
							<!--  = Shipping addr form =  -->
							<!--  ==========  -->
							    
						    <form action="create-purchase.php" method="post" class="form-horizontal form-checkout">
                                <div class="control-group">
                                    <label class="control-label" for="firstName">نام<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="firstName" id="firstName" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="lastName">نام خانوادگی<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="lastName" id="lastName" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="telephone">تلفن<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="tel" name="telephone" pattern="^09[0-9]{9}$" id="telephone" class="span4" required>
<!--                                        <p>--><?php //if(isset($err)){echo $err;} ?><!--</p>-->
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="addr1">آدرس<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="addr" id="addr" class="span4" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="addr1">شیوه ی پرداخت<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="radio" name="type" value="0" checked> نقدی
                                        <input type="radio" name="type" value="1"> درگاه بانکی
                                    </div>
                                </div>

                                <hr />
                                <p class="right-align">
						        در مرحله بعدی شما شیوه پرداخت را انتخاب میکنید &nbsp; &nbsp;
						        <button type="submit" name="acceptBTN" class="btn btn-primary higher bold">ادامه</button>
						    </p>

<!--                              --><?php
//                              if (isset($_POST['telephone'])){$telephone = trim($_POST['telephone']);}
//                              if (isset($_POST['acceptBTN']) ) {
//                                  if(!preg_match('/^09[0-9]{9}$/',$telephone)){
//                                      $err="شماره تلفن وارد شده صحیح نمیباشد ";
//                                      header("Location:checkout-step-2.php");
//                                  }
//                              }
//                              ?>
                                
                            </form>
							

						    
						    
							    
							    
                    	</div>
                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->
    
     
    
     
    </div> <!-- end of master-wrapper -->
    


    <!--  ==========  -->
    <!--  = JavaScript =  -->
    <!--  ==========  -->
    
    <!--  = FB =  -->
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    
    <!--  = jQuery - CDN with local fallback =  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>
    
    <!--  = _ =  -->
    <script src="js/underscore/underscore-min.js" type="text/javascript"></script>
    
    <!--  = Bootstrap =  -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
    <!--  = Slider Revolution =  -->
    <script src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    
    <!--  = CarouFredSel =  -->
    <script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
    
    <!--  = jQuery UI =  -->
    <script src="js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>
    
    <!--  = Isotope =  -->
    <script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
    
    <!--  = Tour =  -->
    <script src="js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>
    
    <!--  = PrettyPhoto =  -->
    <script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    
    <!--  = Google Maps API =  -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/goMap/js/jquery.gomap-1.3.2.min.js"></script>
    
    <!--  = Custom JS =  -->
    <script src="js/custom.js" type="text/javascript"></script>

  </body>
</html>

    
    
