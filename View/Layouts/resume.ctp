<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resume, Personal website, Responsive, Robotics, Embedded Software, Web Development, Cal Poly, KAIST, YONSEI, UC Riverside" />
	<?php
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script src="js/jquery-1.11.1.min.js"></script> 
	<script type="application/x-javascript">  </script>
	
	<link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="css/swipebox.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<!--link rel="stylesheet" type="text/css" href="css/style.custom.css"-->
	
	<link href='//fonts.googleapis.com/css?family=Overlock:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php echo $this->fetch('content'); ?>
	
	
	<script src="js/bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
	function hideURLbar(){ 
		window.scrollTo(0,1); 
	}
	
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});


	</script>
</body>
</html>