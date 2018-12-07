<?php
//	$this->Html->script(array('/js/easyResponsiveTabs', '/js/jquery.swipebox.min'), array('inline' => false));

?>

	<!--h2 class="title sec-title-color">My Projects</h2>
	<div class="sap_tabs">			
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			<ul class="resp-tabs-list wow fadeInUp animated" data-wow-delay=".7s">
				<li class="resp-tab-item"><span><i class="fa fa-globe"></i> All</span></li>
				<li class="resp-tab-item"><span><i class="fa fa-code"></i> EE (S/W)</span></li>
				<li class="resp-tab-item"><span><i class="fa fa-desktop"></i> EE (H/W)</span></li>
				<li class="resp-tab-item"><span><i class="fa fa-html5"></i> Web</span></li>					
			</ul>	
			<div class="clearfix"> </div>	
			<div class="resp-tabs-container">
				<div class="tab-1 resp-tab-content">
					<div class="tab_img row">
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/asi-web.png" class="swipebox" title="ASI Web pages">
									<img src="images/asi-web.png" alt="ASI Web page" class="img-responsive" />
									<div class="figcaption">
										<h3>ASI<span> Web pages</span></h3>
										<p>www.asi.calpoly.edu</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid effect-sarah">
								<a href="images/pj-cuve.png" class="swipebox" title="Cuve is a test prep service that combines a large pool of crowd-sourced questions with adaptive learning algorithm.">
									<img src="images/pj-cuve.png" alt="CUVE" class="img-responsive" />
									<div class="figcaption">
										<h3>CUVE</h3>
										<p>www.cuve.me</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-studentstory.png" class="swipebox" title="Developed ASI new web pages and student stories' section. The whole new web page is to be launch at Fall 2015. (Screen captures are included from internal development server.)">
									<img src="images/pj-studentstory.png" alt="ASI student story" class="img-responsive" />
									<div class="figcaption">
										<h3>ASI Student Stories</span></h3>
										<p>www.asi.calpoly.edu/stories</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-tictactoe.png" class="swipebox" title="Developed a simple tic tac toe game with Javascript for fun.">
									<img src="images/pj-tictactoe.png" alt="tic tac toe game" class="img-responsive" />
									<div class="figcaption">
										<h3>Tic Tac Toe game</h3>
										<p>https://github.com/noaa99/web-applications/tree/master/tictactoe-game</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-speedlimit.png" class="swipebox" title="n this paper we introduce a speed sign recognition system. We discuss and detail our design and implementation of sign recognition and digit classification. We compare different methods for sign recognition, namely template matching, Hough Transform, and mean-shift methods, and explain why we choose mean-shift as our final sign recognition algorithm.">
									<img src="images/pj-speedlimit.png" alt="speed limit recognition" class="img-responsive" />
									<div class="figcaption">
										<h3>Speed Limit Sign Recognition</h3>
										<p>Project at Computer Vision Class, Cal Poly</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-lanedetect.png" class="swipebox" title="This is a challenge assignment, finding the x-intercept of the left and right lane markers closest to the car.">
									<img src="images/pj-lanedetect.png" alt="lane detection" class="img-responsive" />
									<div class="figcaption">
										<h3>Lane Detection</h3>
										<p>Fun project</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-segwaycontrol.png" class="swipebox" title="In this project, I controlled a Segway human transportation system. The Segway uses a motorized platform to stabilize a person standing on top of it. When the rider leans forward, the vehicle propels itself along the ground, but maintain its upright position. In this study, I derived the dynamic equation of a simplified model for Segway system. This is basically an unstable system so the purpose of controlling this system is to stabilize it. As the project guide, I designed a full-state observer, a reduced-order observer, and state feedback controller. For optimal control, I implemented a LQ optimal controller. A deadbeat observer and deadbeat controller are derived from the state space equation in discrete time. Additionally, I implemented a system identification using neural network. Through the project, all calculations are performed by hand and check with Matlab.">
									<img src="images/pj-segwaycontrol.png" alt="segway control" class="img-responsive" />
									<div class="figcaption">
										<h3>Segway Control</h3>
										<p>Project at Advanced Control Class, Cal Poly</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-prm.png" class="swipebox" title="Power Regenerative Module is the device which makes it possible to reuse the electric energy produced when robots decelerate. I designed and simulated a mixed signal circuit(Digital control board) using DSP(2812), which is sensing high voltage and current and controlling IPM. Designed a mixed signal circuit by using DSP and developed device drivers and applications for PRM, managed the whole process from R&D to the installing and testing.">
									<img src="images/pj-prm.png" alt="PRM" class="img-responsive" />
									<div class="figcaption">
										<h3>Power Regenerative Module</h3>
										<p>Project at Hyundai Heavy Industries</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-emi.png" class="swipebox" title="Tested and analyzed the cause of EMI noise problem of servo motor control modules(PCB) and devised solutions">
									<img src="images/pj-emi.png" alt="emi" class="img-responsive" />
									<div class="figcaption">
										<h3>Analysis of EMI noise of PCB</h3>
										<p>Project at Hyundai Heavy Industries</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-robotcontrol.png" class="swipebox" title="Contributed to solve vibration, noise, and accuracy issues of industrial manipulators used in automobiles or LCD manufacturing companies. Devised a precise robust control algorithm and improved the performance of manipulators. Improved an ability ! to analyze control issues using 3D laser tracker and accelerometer.">
									<img src="images/pj-robotcontrol.png" alt="robot control" class="img-responsive" />
									<div class="figcaption">
										<h3>Analysis of EMI noise of PCB</h3>
										<p>Project at Hyundai Heavy Industries</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-desktopcontroller.png" class="swipebox" title="Contributed to design a small-size motor control board. Designed the control board using a high performance FPGA. Improved tolerance to the unexpected electromagnetic noise at motor encoder lines and cross talk noise between layers in the control board.">
									<img src="images/pj-desktopcontroller.png" alt="servo control" class="img-responsive" />
									<div class="figcaption">
										<h3>Development of servo motor controller</h3>
										<p>Project at Hyundai Heavy Industries</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-humanoid.png" class="swipebox" title="CSuggested a natural walking trajectory of biped robots using its hip motion, developed RTOS embedded control system and lower body of humanoid robot with 12- DOF">
									<img src="images/pj-humanoid.png" alt="biped robots walking" class="img-responsive" />
									<div class="figcaption">
										<h3>Generation of a walking trajectory of biped robots</h3>
										<p>Project at KAIST</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-digitalociloscope.png" class="swipebox" title="Designed a ADC, signal conditioning circuit and developed device drivers of RTOS(Linux)">
									<img src="images/pj-digitalociloscope.png" alt="embeded systems" class="img-responsive" />
									<div class="figcaption">
										<h3>Development of digital oscilloscope</h3>
										<p>Project at KAIST</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-safespace.png" class="swipebox" title="Designed a digital circuit of dual-monitoring digital system using DSPs and FPGA, and developed device drivers">
									<img src="images/pj-safespace.png" alt="safe space" class="img-responsive" />
									<div class="figcaption">
										<h3>Development of safe-space board</h3>
										<p>Project at Hyundai Heavy Industries</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="tab-1 resp-tab-content">
					<div class="tab_img row">
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/pj-prm.png" class="swipebox" title="Power Regenerative Module is the device which makes it possible to reuse the electric energy produced when robots decelerate. I designed and simulated a mixed signal circuit(Digital control board) using DSP(2812), which is sensing high voltage and current and controlling IPM. Designed a mixed signal circuit by using DSP and developed device drivers and applications for PRM, managed the whole process from R&D to the installing and testing.">
									<img src="images/pj-prm.png" alt="PRM" class="img-responsive" />
									<div class="figcaption">
										<h3>Power Regenerative Module</h3>
										<p>Project at Hyundai Heavy Industries</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
									<img src="images/g6.jpg" alt="" class="img-responsive" />
									<div class="figcaption">
										<h3>My<span> Project</span></h3>
										<p>Sarah likes to watch clouds. She's quite depressed.</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/g7.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
									<img src="images/g7.jpg" alt="" class="img-responsive" />
									<div class="figcaption">
										<h3>My<span> Project</span></h3>
										<p>Sarah likes to watch clouds. She's quite depressed.</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="tab-1 resp-tab-content">
					<div class="tab_img row">
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
									<img src="images/g3.jpg" alt="" class="img-responsive" />
									<div class="figcaption">
										<h3>My<span> Project</span></h3>
										<p>Sarah likes to watch clouds. She's quite depressed.</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
									<img src="images/g1.jpg" alt="" class="img-responsive" />
									<div class="figcaption">
										<h3>My<span> Project</span></h3>
										<p>Sarah likes to watch clouds. She's quite depressed.</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/g9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
									<img src="images/g9.jpg" alt="" class="img-responsive" />
									<div class="figcaption">
										<h3>My<span> Project</span></h3>
										<p>Sarah likes to watch clouds. She's quite depressed.</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="tab-1 resp-tab-content">
					<div class="tab_img row">
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
									<img src="images/g2.jpg" alt="" class="img-responsive" />
									<div class="figcaption">
										<h3>My<span> Project</span></h3>
										<p>Sarah likes to watch clouds. She's quite depressed.</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
									<img src="images/g4.jpg" alt="" class="img-responsive" />
									<div class="figcaption">
										<h3>My<span> Project</span></h3>
										<p>Sarah likes to watch clouds. She's quite depressed.</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="4u 6u(medium) 6u(small) 12u$(xsmall) portfolio-grids">
							<div class="grid">
								<a href="images/g8.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
									<img src="images/g8.jpg" alt="" class="img-responsive" />
									<div class="figcaption">
										<h3>My<span> Project</span></h3>
										<p>Sarah likes to watch clouds. She's quite depressed.</p>
									</div>
								</a>	
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div-->

	<script type="text/javascript">
	/*	$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	*/
	</script>

<h2 class="title sec-title-color">Projects</h2>
<div class="row">
	<article class="6u 12u$(xsmall) work-item">
		<a href="images/fulls/asi-web.png" class="image fit thumb"><img src="images/thumbs/asi-web.png" alt="" /></a>
		<h3>ASI Web</h3>
		<p>Cal Poly ASI Web sites - www.asi.calpoly.edu</p>
	</article>
	<article class="6u$ 12u$(xsmall) work-item">
		<a href="images/fulls/pj-segwaycontrol.png" class="image fit thumb"><img src="images/thumbs/pj-segwaycontrol.png" alt="" /></a>
		<h3>Segway Control</h3>
		<p>Adv. Control theory - Cal Poly 2015.</p>
	</article>
	<article class="6u 12u$(xsmall) work-item">
		<a href="images/fulls/pj-speedlimit.png" class="image fit thumb"><img src="images/thumbs/pj-speedlimit.png" alt="" /></a>
		<h3>Speed Limit Recognition</h3>
		<p>Computer Vision - Cal Poly 2014.</p>
	</article>
	<article class="6u$ 12u$(xsmall) work-item">
		<a href="images/fulls/pj-lanedetect.png" class="image fit thumb"><img src="images/thumbs/pj-lanedetect.png" alt="" /></a>
		<h3>Lane Detection</h3>
		<p>Personal Fun - Cal Poly 2015.</p>
	</article>
	<article class="6u 12u$(xsmall) work-item">
		<a href="images/fulls/pj-prm.png" class="image fit thumb"><img src="images/thumbs/pj-prm.png" alt="" /></a>
		<h3>Power Regenerative Module</h3>
		<p>Hyundai Heavy Industries 2011.</p>
	</article>
	<article class="6u$ 12u$(xsmall) work-item">
		<a href="images/fulls/pj-cuve.png" class="image fit thumb"><img src="images/thumbs/pj-cuve.png" alt="" /></a>
		<h3>CUVE (SAT Online Testprep)</h3>
		<p>Start up at Palo Alto 2012.</p>
	</article>
</div>
<ul class="actions">
	<li><a href="https://portfolium.com/hchoi12/portfolio" target="_blank" class="button">Full Portfolio</a></li>
</ul>


