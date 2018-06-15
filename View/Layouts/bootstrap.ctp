<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Bamtori.me</title>
        <!--meta name="description" content="This is a layout for testing bootstrap">
        <meta name="author" content="Hyunjong Choi"-->

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <!--link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png"-->
        
        <!-- Google Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster&effect=outline' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Anton" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        
        <!-- Using CDN -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!--script src="js/bootstrap/bootstrap.js"></script-->
        <script src="js/bootstrap/bootstrap.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <!--script type="text/javascript" src="/js/asix/modernizr-2.5.3.min.js"></script-->
        <link rel="stylesheet" href="css/font-style-color.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style.mainmenu.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
    </head>

    <body>
        <div id="load" class="progress">
            <div class="progress-bar progress-bar-success asi-bgcolor-green active" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
            <span class="sr-only asi-color-green">5%</span>
            </div>
        </div>
        
        <div id="contents">
        <header>
            <?php echo $this->element('mainmenu', array('arg'=>'main_menu')); ?>
            <?php //echo $this->element('main_menu'); ?>
        </header>
        
        <?php echo $content_for_layout; ?>
        </div>
        
        <?php echo $scripts_for_layout; ?>
        <div class="back-to-top-button-wrap">
            <a href="#first" class="scrollupBtn scrolly"></a>
        </div>
        
        <link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/video-js.css">
         
        <script type="text/javascript" src="js/jquery.mainmenu.js"></script>
        <script type="text/javascript" src="js/jquery.parallax.js"></script>
        <script type="text/javascript" src="js/iscroll.js"></script>
        <script type="text/javascript" src="js/backgroundVideo.js"></script>
        <script type="text/javascript" src="js/jquery.wow.js"></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script type="text/javascript" src="js/jquery.detectMobile.min.js"></script>
       
        <script type="text/javascript" src="js/video.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
    </body>
</html>


