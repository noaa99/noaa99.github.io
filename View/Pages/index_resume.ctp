<section id="header">
	<?php echo $this->element('strata/header'); ?>
</section>
<!--section id="home" class="banner">
	<?php //echo $this->element('resume/header'); ?>
</section-->
<section id="main" class="container">
	<!--section id="menu">
		<?php //echo $this->element('resume/menu'); ?>
	</section-->
		
	<section id="research" class="about">
		<?php echo $this->element('resume/about'); ?>
	</section>

	<section id="work" class="work">
		<?php echo $this->element('resume/experience'); ?>		
	</section>

	<section id="education" class="education">
		<?php echo $this->element('resume/education'); ?>		
	</section>

	<section id="skills" class="skills">
		<?php echo $this->element('resume/skills'); ?>
	</section>

	<section id="projects" class="portfolio">
		<?php echo $this->element('resume/projects'); ?>
	</section>

	<section class="welcome contact" id="contact">
		<?php echo $this->element('resume/contact'); ?>
	</section>
</section>
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