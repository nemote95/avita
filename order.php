
  <head>

    <meta charset="utf-8">
    <title>Avita - Order</title>
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
    <link href="./stylesheets/literallycanvas.css" rel="stylesheet">
    
    <!-- Modernizr -->
    <script src="js/modernizr.custom.56918.js"></script>    

    <!-- Fav and touch icons -->

  </head>

   
  <body class="">
    
    <div class="master-wrapper">

        <?php include 'register.php' ?>
        <?php include 'login.php'?>
        <?php include 'header.php' ?>

    <div class="fs-container">
      <div id="lc"></div>
                            


		<p class="push-down-20">
			<textarea id="text" class="input-block-level" tabindex="4" rows="7" cols="70" id="comment" name="request" placeholder="پیامتان را در اینجا بنویسید ..." required></textarea>
		</p>
       <p>
       <button class="btn btn-primary bold" onclick="saveOrder()" tabindex="5" id="submit">ارسال سفارش</button>
       </p>

</div>
</div>
 <?php include 'footer.php'; ?>
   <script src="./js/react-0.14.3.js"></script>
    <script src="./js/literallycanvas.js"></script>

    <script type="text/javascript">
      var lc = LC.init(document.getElementById("lc"), {
        imageURLPrefix: './images/lc-images',
        toolbarPosition: 'bottom',
        defaultStrokeWidth: 2,
        strokeWidths: [1, 2, 3, 5, 30]
      });
             
    </script>
    <script type="text/javascript">

    function saveOrder() {
		
        var file = lc.getImage().toDataURL();
		var text=document.getElementById('text').value;

        var data = new FormData();
        data.append('file', file);
        data.append('text', text);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xmlhttp.open("POST", "save_order.php" , true);
        xmlhttp.send(data);
        }
    


    </script>
  </body>

