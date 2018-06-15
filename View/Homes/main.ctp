<header id="header" class="bordered">
	<?php echo $this->element('main_menu'); ?>
</header><!--/ #header-->

<div id="wrapper">
	<!-- Slide show section -->
	<section id="slideshow" class="page">
		<section class="section padding-off">
        	<!--div class="campaign"><div id="flag"><p class="campaign-text">we create</p></div></div-->
			<div id="slides">
				<ul class="slides-container">
					<li>
						<div style="background-image: url('images/slider/IMG_0704.jpg');" class="fullscreen-image">
							<div class="parallax-overlay"></div>
							<div class="header-text-entry">
								<div class="header-text">
									<h2 tabindex="0">Saucer is My Life</h2>
								</div>
							</div><!--/ .header-text-entry-->
						</div><!--/ .fullscreen-image-->
					</li>
					<li>
						<div style="background-image: url('images/slider/IMG_0736.jpg');" class="fullscreen-image">
							<div class="parallax-overlay"></div>
							<div class="header-text-entry">
								<div class="header-text">
									<h2 tabindex="0">Just Itchy and Itchy</h2>
								</div>	
							</div><!--/ .header-text-entry-->
						</div><!--/ .fullscreen-image-->
					</li>
				</ul>
				<nav class="slides-navigation">
					<a href="#" class="prev">1</a>
					<a href="#" class="next">2</a>
				</nav>
			</div><!--/ #slides-->
		</section><!--/ .section-->
	</section><!--/ .page-->

	<!-- Who section -->
	<section id="who" class="page">
		<section class="section">
			<div class="container">
				<div class="row">
                	<div class="col-xs-12">
						<div class="section-title align-center opacity">
							<h1 id="content">Who?</h1>
                           	<h2 class="header-text-slogan font-effect-outline" tabindex="0">What is Bamtori...</h2>
            				<h2 class="header-text-slogan font-effect-outline font_korean" tabindex="0">(밤톨이는 누구여?)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-xs-12">
					<p>Bamtori is the word from South Korea originally. It is symbolic representation of cute things looks like a chestnut. We call Jayden Bamtori for his birth name.</p>
                      	<img src="images/bamtori_internet.png" width="540" height="354" alt="word art" longdesc="adjectives.html">
                  	
                    <p class="font_korean">밤톨이는 희준이의 태명입니다.</p>
				</div>					
               
                <div class="col-md-6 col-xs-12">
					<h3 class="content-title">Most representive Bamtori:</h3>
					<h3 class="content-title font_korean">가장 밤톨이 다움이란:</h3>
						<div class="progress-bar">
							<div class="progressbar-title">Funny Face <span class="font_korean">(코믹한 얼굴)</span></div>
							<span class="percent">95%</span>
							<div class="bar-outer">
								<div class="bar" data-progress="95"></div>
							</div>
						</div><!--/ .progress-bar-->
						<div class="progress-bar">
							<div class="progressbar-title">Adorable Eyes <span class="font_korean">(사랑스런 눈망울)</span></div>
							<span class="percent">99%</span>
							<div class="bar-outer">
								<div class="bar" data-progress="99"></div>
							</div>
						</div><!--/ .progress-bar-->

						<div class="progress-bar">
							<div class="progressbar-title">Expanded Head Size <span class="font_korean">(큰 머리 사이즈)</span></div>
							<span class="percent">89%</span>
							<div class="bar-outer">
								<div class="bar" data-progress="89"></div>
							</div>
						</div><!--/ .progress-bar-->

						<div class="progress-bar">
							<div class="progressbar-title">Short Legs <span class="font_korean">(짧은 다리)</span></div>
							<span class="percent">63%</span>
							<div class="bar-outer">
								<div class="bar" data-progress="63"></div>
							</div>
						</div><!--/ .progress-bar-->
                            
                        <div class="progress-bar">
							<div class="progressbar-title">Just Jayden <span class="font_korean">(그냥 희준이 그 자체)</span></div>
							<span class="percent">100%</span>
							<div class="bar-outer">
								<div class="bar" data-progress="100"></div>
							</div>
						</div><!--/ .progress-bar-->
					</div>
                </div>
            </div>
         </section>
    </section>

	<section class="section parallax parallax-bg-2">
		<div class="full-bg-image"></div>
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-title align-center opacity">
						<h1 class="white">Anniversary</h1>
					</div>		
				</div>
			</div><!--/ .row-->

			<?PHP
				$today = date("Y-m-d",time());
				$birthday = Trim('2014-04-07');
				$anniDate = Trim('2015-04-07');
				$lived = intval((strtotime($today)-strtotime($birthday)) / 86400);
				$leftAnni = intval((strtotime($anniDate)-strtotime($today)) / 86400);				
			?>
			<div class="row">
				<div class="col-xs-12">
					<div class="counter-box">
						<div data-from="0" data-to="<?PHP echo $lived; ?>" data-speed="1300" class="counter opacity">
							<span class="count"></span>
							<h2 class="details">He lived for<br><span class="font_korean">살아온 날</span></h2>
						</div><!--/ .counter-->	

						<div data-from="0" data-to="<?PHP echo $leftAnni; ?>" data-speed="1300" class="counter opacity">
							<span class="count"></span>
							<h2 class="details">Anniversary left<br><span class="font_korean">첫 돌까지</span></h2>
						</div><!--/ .counter-->	
					</div><!--/ .counter-box-->	
				</div>
			</div><!--/ .row-->
		</div><!--/ .container-->
	</section><!--/ .section-->


    <section id="tmp" class="page">
        
    </section>


	<section id="history" class="page">
    	<?php echo $this->element('history_heejun'); ?>
	</section><!-- End History Section -->

	<section class="section parallax parallax-bg-2 bg-turquoise-color">
		<?php echo $this->element('guest_messages'); ?>
	</section><!--/ .page-->



</div><!--/ #wrapper-->
