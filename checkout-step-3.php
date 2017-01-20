<!--[if lt IE 8]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Avita - Checkout Step 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

    <!--  Google Fonts  -->
    <link
        href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek'
        rel='stylesheet' type='text/css'>

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

                                    <div class="span6">
                                        <div class="center-align">
                                            <h1> صورت حساب</h1>
                                        </div>
                                    </div>
                                    <div class="span2">

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
                                        <a href="checkout-step-1.php">سبد خريد</a>
                                    </div>
                                    <div class="step done">
                                        <div class="step-badge"><i class="icon-ok"></i></div>
                                        <a href="checkout-step-2.php">آدرس ارسال</a>
                                    </div>

                                    <div class="step active">
                                        <div class="step-badge">4</div>
                                        تاييد و پرداخت
                                    </div>
                                </div>
                            </div> <!-- /steps -->

                            <!--  ==========  -->
                            <!--  = Selected Items =  -->
                            <!--  ==========  -->
                            <table class="table table-items">

                                <tbody>
								<?php 
								include "config.php";
								if (!isset($_GET["BID"])){
									header("Location: 404.php");
								}
								$purchase_query = $dbh->prepare("SELECT PUID,first_name,last_name,phone,address,cost,percentage,basket_product.Count 
																FROM purchase,basket_product,product
																LEFT OUTER JOIN discount ON product.DID=discount.DID 
																WHERE purchase.BID= :BID AND
																basket_product.BID=purchase.BID AND
																product.PRID=basket_product.PRID;");
								$purchase_query->bindParam(':BID', $_GET["BID"]);
								$purchase_query->execute();
								$purchase_info= $purchase_query->fetchAll();
								
								$discount_sum=0;
                                    foreach($purchase_info as $p){
										if ($p['percentage']!=null){
											$discount_sum+=(1-$p['percentage'])*$p['cost']*$p['Count'];}
										else{
											$discount_sum+=$p['cost']*$p['Count'];}
										}

                                echo '<tr>
                                    <td class="desc">نام :</td>
                                    <td class="qty">'.$purchase_info[0]["first_name"].'
                                    
                                        </td>

                                </tr>

                                <tr>
                                    <td class="desc">نام خانوادگی :</td>
                                    <td class="qty">'.$purchase_info[0]["last_name"].'
                                        </td>

                                </tr>

                                <tr>
                                    <td class="desc">تلفن :</td>
                                    <td class="qty">'.$purchase_info[0]["phone"].'
                                        </td>

                                </tr>
                                <tr>
                                    <td class="desc">آدرس :</td>
                                    <td class="qty">'.$purchase_info[0]["address"].'
                                        </td>

                                </tr>


                                
                                <tr>
                                    <td class="stronger">جمع کل :</td>
                                    <td class="stronger">
                                    
										
                                        <div class="size-16 align-right">'.$discount_sum.'</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="stronger">شماره ی صورت حساب :</td>
                                    <td class="stronger">
                                     <div class="size-16 align-right">'.$purchase_info[0]["PUID"].'</div>
                                    </td>
                                </tr>
                                </tbody>'; ?>
                            </table>

                            <p class="right-align">
                                <a href="index.php" class="btn btn-primary higher bold">تاييد </a>
                            </p>
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
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
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

    
    
