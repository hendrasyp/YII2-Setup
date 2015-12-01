<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!-- SLIDER -->
<div id="slider">
	<div id="main-slider1" class="owl-carousel owl-theme">
		<div class="item">
			<img src="images/slider/1.jpg" alt="">
			<div class="container">
				<h3>Wefit Fitness<span>Helps you get more active</span></h3>
			</div>
		</div>
		<div class="item">
			<img src="images/slider/2.jpg" alt="">
			<div class="container caption2">
				<h3>It's not a diet<span>It's a Permanent LIFTSTYLE CHANGE</span></h3>
			</div>
		</div>
		<div class="item">
			<img src="images/slider/3.jpg" alt="">
			<div class="container">
				<div class="caption3">
					<h3>It never get easier<span>You Just Get Stronger</span></h3>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ABOUT -->
<div class="home-about" id="1">
	<div class="overlay2"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-head content-head-trans">
					<h3><span>Wefit Specialities</span><i><img src="images/hand.png" alt=""/></i></h3>
					<p>WeFit Fitness helps you get more active, improve your fitness level and your sports performance.</p>
				</div>
				<ul class="about-info">
					<li>
						<i><img src="images/ico/1.png" class="img-responsive" alt=""/></i>
						<h4>Yoga</h4>
						<p>Fusce dapibus, tellus ac cursus commodo,<br>tortor mauris condimentum nibh, ut<br>fermentum massa sagittis.</p>
					</li>
					<li>
						<i><img src="images/ico/2.png" class="img-responsive" alt=""/></i>
						<h4>Body Building</h4>
						<p>Fusce dapibus, tellus ac cursus commodo,<br>tortor mauris condimentum nibh, ut<br>fermentum massa sagittis.</p>
					</li>
					<li class="hidden-li">
						<i><img src="images/ico/3.png" class="img-responsive" alt=""/></i>
						<h4>Fitness</h4>
						<p>Fusce dapibus, tellus ac cursus commodo,<br>tortor mauris condimentum nibh, ut<br>fermentum massa sagittis.</p>
					</li>
					<li>
						<i><img src="images/ico/3.png" class="img-responsive" alt=""/></i>
						<h4>Fitness</h4>
						<p>Fusce dapibus, tellus ac cursus commodo,<br>tortor mauris condimentum nibh, ut<br>fermentum massa sagittis.</p>
					</li>
					<li>
						<i><img src="images/ico/4.png" class="img-responsive" alt=""/></i>
						<h4>Cardio</h4>
						<p>Fusce dapibus, tellus ac cursus commodo,<br>tortor mauris condimentum nibh, ut<br>fermentum massa sagittis.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- STUDIO -->
<div class="home-studio" id="2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-head content-head-trans content-head-lite">
					<h3><span>Our Studio</span><i><img src="images/cycle.png" alt=""/></i></h3>
					<p>We want u to have fun, stay healthy, feel good and lead a better life.</p>
				</div>
			</div>
			<div class="col-md-12" id="studio">
				<!-- Start Filter -->
				<ul class="studio-filter xtra" data-option-key="filter">
					<li><a class="selected" href="#filter" data-option-value="*">Show All</a></li>
					<li><a href="#filter" data-option-value=".aerobics">Aerobics</a></li>
					<li><a href="#filter" data-option-value=".yoga">Yoga</a></li>
					<li><a href="#filter" data-option-value=".spa">Spa</a></li>
					<li><a href="#filter" data-option-value=".beauty">Beauty</a></li>
				</ul>
				<!-- End Filter -->
				<div class="studio-grid">
					<div id="folio" class="isotope">
						<div id="da-thumbs" class="da-thumbs">
							<div class="studio-item isotope-item yoga">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/1.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
							<div class="studio-item isotope-item aerobics">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/2.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
							<div class="studio-item isotope-item spa">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/3.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
							<div class="studio-item isotope-item aerobics">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/4.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
							<div class="studio-item isotope-item beauty">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/5.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
							<div class="studio-item isotope-item yoga">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/6.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
							<div class="studio-item isotope-item spa">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/7.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
							<div class="studio-item isotope-item beauty">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/8.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
							<div class="studio-item isotope-item yoga">
								<div class="studio-thumb">
									<div class="st-overlay">
										<h4>Cardio Training</h4>
										<p>Sara Joshep</p>
									</div>
									<div class="studio-thumb-inner">
										<img src="images/studio/9.jpg" class="img-responsive" alt=""/>
										<span class="si-zoom"><i class="fa fa-search-plus"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- STATS -->
<div class="home-stats">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4><span class="stat1">0</span>Happy Customers</h4>
				<i class="fa fa-smile-o"></i>
			</div>
			<div class="col-md-3">
				<h4><span class="stat2">0</span>Specialist</h4>
				<i class="fa fa-stethoscope"></i>
			</div>
			<div class="col-md-3">
				<h4><span class="stat3">0</span>Branches</h4>
				<i class="fa fa-pagelines"></i>
			</div>
			<div class="col-md-3">
				<h4><span class="stat4">0</span>Days Worked</h4>
				<i class="fa fa-trophy"></i>
			</div>
		</div>
	</div>
</div>

<!-- ABOUT -->
<div class="home-about1" id="3">
	<div class="overlay2"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-head content-head-trans">
					<h3><span>About Wefit</span><i><img src="images/heart.png" alt=""/></i></h3>
					<p>Our various kinds of training instruments are effective to beautify your body-shape.</p>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="about-intro">
							<h4><span>01</span>Introduction</h4>
							<div class="ai-inner">
								<h6>Welcome, Wefit is a fitness care center</h6>
								<div class="space20"></div>
								<p>Donec suscipit vehicula turpis sed lutpat Quisque vitae quam neque. Morbi cilisis placerat dapibus. Donec suscipit vehicula turpis sed lutpat Quisque vitae quam neque. Morbi cilisis placerat dapibus. Donec suscipit vehicula turpis sed lutpat Quisque vitae quam neque. Morbi cilisis placerat dapibus.</p>
								<div class="space30"></div>
								<ul class="tick-list">
									<li>Increase your performance in exercising</li>
									<li>Burning fat and getting rid of edema</li>
									<li>Provides different techniques in practising</li>
									<li>Our 1 to 1 coaches will design tailor-made training</li>
								</ul>
								<div class="clearfix space20"></div>
								<p class="quote-text">Donec suscipit vehicula turpis sed lutpat Quisque vitae quam neque. Morbi cilisis placerat dapibus.</p>
							</div>
						</div>
						<div class="space50"></div>
					</div>
					<div class="col-md-6">
						<div class="about-skills">
							<h4><span>02</span>Skills</h4>
							<ul class="skills">
								<li>
									<h5>Aerobics <span><em></em>%</span></h5>
									<div class="skill-bar"><span class="nowidth" style="width:90%;"></span></div>
								</li>
								<li>
									<h5>Yoga <span><em></em>%</span></h5>
									<div class="skill-bar"><span class="nowidth" style="width:95%;"></span></div>
								</li>
								<li>
									<h5>Cardio <span><em></em>%</span></h5>
									<div class="skill-bar"><span class="nowidth" style="width:80%;"></span></div>
								</li>
								<li>
									<h5>Body Building <span><em></em>%</span></h5>
									<div class="skill-bar"><span class="nowidth" style="width:70%;"></span></div>
								</li>
								<li>
									<h5>Nutrition <span><em></em>%</span></h5>
									<div class="skill-bar"><span class="nowidth" style="width:80%;"></span></div>
								</li>
							</ul>
						</div>
						<div class="clearfix space80"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- TRAINERS -->
<div class="home-trainers" id="4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-head content-head-trans">
					<h3><span>Our Trainers</span><i><img src="images/shoe.png" alt=""/></i></h3>
					<p>Our 1 to 1 coaches will design tailor-made training courses for you according to your physical fitness and needs</p>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="trainers-slider">
							<div class="trainer-info">
								<div class="trainer-thumb">
									<img src="images/xtra/2/1.jpg" class="img-responsive" alt=""/>
									<div class="tt-overlay">
										<h5><a href="#">More Details<br>About this Trainer</a></h5>
									</div>
									<div class="tt-overlay2">
										<h4>Sara Joseph<span>Cardio Trainer</span></h4>
										<ul>
											<li><a href="#" class="fa fa-facebook"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="trainer-info">
								<div class="trainer-thumb">
									<img src="images/xtra/2/2.jpg" class="img-responsive" alt=""/>
									<div class="tt-overlay">
										<h5><a href="#">More Details<br>About this Trainer</a></h5>
									</div>
									<div class="tt-overlay2">
										<h4>Rebecca Doe<span>Yoga Trainer</span></h4>
										<ul>
											<li><a href="#" class="fa fa-facebook"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="trainer-info">
								<div class="trainer-thumb">
									<img src="images/xtra/2/3.jpg" class="img-responsive" alt=""/>
									<div class="tt-overlay">
										<h5><a href="#">More Details<br>About this Trainer</a></h5>
									</div>
									<div class="tt-overlay2">
										<h4>Albert Doe<span>Aerobics Trainer</span></h4>
										<ul>
											<li><a href="#" class="fa fa-facebook"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="trainer-info">
								<div class="trainer-thumb">
									<img src="images/xtra/2/4.jpg" class="img-responsive" alt=""/>
									<div class="tt-overlay">
										<h5><a href="#">More Details<br>About this Trainer</a></h5>
									</div>
									<div class="tt-overlay2">
										<h4>Jenifer<span>Nutritionist</span></h4>
										<ul>
											<li><a href="#" class="fa fa-facebook"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="trainer-info">
								<div class="trainer-thumb">
									<img src="images/xtra/2/5.jpg" class="img-responsive" alt=""/>
									<div class="tt-overlay">
										<h5><a href="#">More Details<br>About this Trainer</a></h5>
									</div>
									<div class="tt-overlay2">
										<h4>Maria Doe<span>Fitness Expert</span></h4>
										<ul>
											<li><a href="#" class="fa fa-facebook"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- QUOTE -->
<div class="home-quote" id="5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="quote-slider">
					<div class="quote-info">
						<i><img src="images/quote/1.png" alt=""/></i>
						<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur.</p>
						<cite>- John Doe</cite>
					</div>
					<div class="quote-info">
						<i><img src="images/quote/2.png" alt=""/></i>
						<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur.</p>
						<cite>- John Doe</cite>
					</div>
					<div class="quote-info">
						<i><img src="images/quote/3.png" alt=""/></i>
						<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur.</p>
						<cite>- John Doe</cite>
					</div>
					<div class="quote-info">
						<i><img src="images/quote/4.png" alt=""/></i>
						<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur.</p>
						<cite>- John Doe</cite>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- PRICING -->
<div class="home-plans" id="6">
	<div class="container">
		<div class="content-head">
			<h3><span>Program packages</span><i><img src="images/pack.png" alt=""/></i></h3>
			<p>Our various kinds of training instruments are effective to beautify your body-shape</p>
		</div>
	</div>
	<div class="container plans-pack">
		<div class="col-md-6">
			<div class="col-md-6">
				<div class="pp-info">
					<h4>30 Hours Pack</h4>
					<div class="plan-features">
						<ul>
							<li>Aerobics</li>
							<li>Yoga</li>
							<li>Stretch</li>
						</ul>
						<span>$<em>30</em></span>
					</div>
					<p>Three basic workout plan , Common trainer, No flexible schedule, No discount</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="pp-head">
					<div class="pph-inner">
						<i class="fa fa-bullseye"></i>
						<p>Basic pack</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<div class="pp-info">
					<h4>60 Hours Pack</h4>
					<div class="plan-features">
						<ul class="pull-right">
							<li>Aerobics</li>
							<li>Yoga</li>
							<li>Cardio</li>
						</ul>
						<span class="pull-left">$<em>50</em></span>
					</div>
					<p>Three basic workout plan , Common trainer, No flexible schedule, No discount</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="pp-head">
					<div class="pph-inner">
						<i class="fa fa-bullseye"></i>
						<p>Intermediate<br>Pack</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container plans-pack">
		<div class="col-md-6">
			<div class="col-md-6">
				<div class="pp-head">
					<div class="pph-inner">
						<i class="fa fa-bullseye"></i>
						<p>Advance<br>pack</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="pp-info pp-info2">
					<h4>90 Hours Pack</h4>
					<div class="plan-features">
						<ul>
							<li>Cardio</li>
							<li>Aerobics</li>
							<li>Yoga</li>
						</ul>
						<span>$<em>80</em></span>
					</div>
					<p>Three basic workout plan , Common trainer, No flexible schedule, No discount</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<div class="pp-head">
					<div class="pph-inner">
						<i class="fa fa-bullseye"></i>
						<p>Master<br>Pack</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="pp-info pp-info2">
					<h4>120 Hours Pack</h4>
					<div class="plan-features">
						<ul class="pull-right">
							<li>Aerobics</li>
							<li>Yoga</li>
							<li>Weight</li>
						</ul>
						<span class="pull-left">$<em>100</em></span>
					</div>
					<p>Three basic workout plan , Common trainer, No flexible schedule, No discount</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- NEWSLETTER -->
<div class="home-newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<p><i class="fa fa-edit"></i> Subscribe to our newsletter</p>
				<form>
					<input type="text" placeholder="Enter your email">
					<button type="submit">Send</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- SCHEDULE -->
<div class="home-schedule" id="7">
	<div class="overlay2"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-head content-head-trans">
					<h3><span>Our Schedules</span><i><img src="images/calendar.png" alt=""/></i></h3>
					<p>Our various kinds of training instruments are effective to beautify your body-shape.</p>
				</div>
				<ul class="schedule-info">
					<li>
						<i>
							<img src="images/ico/1.png" class="img-responsive sc-img1" alt=""/>
							<img src="images/ico/1-hr.png" class="img-responsive sc-img2" alt=""/>
						</i>
						<div class="si-inner">
							<h4>Yoga</h4>
							<div class="si-time">
								Monday - Friday<br>5:00 am - 9:00 pm<br>John Doe
							</div>
							<div class="si-time">
								Monday - Friday<br>5:00 am - 9:00 pm<br>Sara John
							</div>
							<a href="#">More Details & Info</a>
						</div>
					</li>
					<li>
						<i>
							<img src="images/ico/4.png" class="img-responsive sc-img1" alt=""/>
							<img src="images/ico/4-hr.png" class="img-responsive sc-img2" alt=""/>
						</i>
						<div class="si-inner">
							<h4>Body Building</h4>
							<div class="si-time">
								Monday - Friday<br>5:00 am - 9:00 pm<br>John Doe
							</div>
							<div class="si-time">
								Monday - Friday<br>5:00 am - 9:00 pm<br>Sara John
							</div>
							<a href="#">More Details & Info</a>
						</div>
					</li>
					<li class="active">
						<i>
							<img src="images/ico/3.png" class="img-responsive sc-img1" alt=""/>
							<img src="images/ico/3-hr.png" class="img-responsive sc-img2" alt=""/>
						</i>
						<div class="si-inner">
							<h4>Fitness</h4>
							<div class="si-time">
								Monday - Friday<br>5:00 am - 9:00 pm<br>John Doe
							</div>
							<div class="si-time">
								Monday - Friday<br>5:00 am - 9:00 pm<br>Sara John
							</div>
							<a href="#">More Details & Info</a>
						</div>
					</li>
					<li>
						<i>
							<img src="images/ico/2.png" class="img-responsive sc-img1" alt=""/>
							<img src="images/ico/2-hr.png" class="img-responsive sc-img2" alt=""/>
						</i>
						<div class="si-inner">
							<h4>Cardio</h4>
							<div class="si-time">
								Monday - Friday<br>5:00 am - 9:00 pm<br>John Doe
							</div>
							<div class="si-time">
								Monday - Friday<br>5:00 am - 9:00 pm<br>Sara John
							</div>
							<a href="#">More Details & Info</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- CLIENTS -->
<div class="home-clients">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="client-slider">
					<div class="client-thumb">
						<img src="images/clients/1.png" class="c-img1" alt=""/>
						<img src="images/clients/1-hr.png" class="c-img2" alt=""/>
					</div>
					<div class="client-thumb">
						<img src="images/clients/2.png" class="c-img1" alt=""/>
						<img src="images/clients/2-hr.png" class="c-img2" alt=""/>
					</div>
					<div class="client-thumb">
						<img src="images/clients/3.png" class="c-img1" alt=""/>
						<img src="images/clients/3-hr.png" class="c-img2" alt=""/>
					</div>
					<div class="client-thumb">
						<img src="images/clients/4.png" class="c-img1" alt=""/>
						<img src="images/clients/4-hr.png" class="c-img2" alt=""/>
					</div>
					<div class="client-thumb">
						<img src="images/clients/3.png" class="c-img1" alt=""/>
						<img src="images/clients/3-hr.png" class="c-img2" alt=""/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- JOIN -->
<div class="home-join">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-head content-head-trans content-head-lite">
					<h3><span>Join with us</span><i><img src="images/join.png" alt=""/></i></h3>
					<p>Join with us, We will provide training that are effective to beautify your body-shape</p>
				</div>
				<form>
					<input type="text" placeholder="Name">
					<input type="email" placeholder="Email">
					<button type="submit">Contact Now</button>
					<div class="clearfix"></div>
					<div class="cbox">
						<ul>
							<li>
								<input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" checked="checked"/>
								<label for="checkboxG1" class="css-label">Yoga</label>
							</li>
							<li>
								<input type="checkbox" name="checkboxG1" id="checkboxG2" class="css-checkbox" />
								<label for="checkboxG2" class="css-label">Fitness</label>
							</li>
							<li>
								<input type="checkbox" name="checkboxG1" id="checkboxG3" class="css-checkbox" />
								<label for="checkboxG3" class="css-label">Body Building</label>
							</li>
							<li>
								<input type="checkbox" name="checkboxG1" id="checkboxG4" class="css-checkbox" />
								<label for="checkboxG4" class="css-label">Aerobics</label>
							</li>
							<li>
								<input type="checkbox" name="checkboxG1" id="checkboxG5" class="css-checkbox" />
								<label for="checkboxG5" class="css-label">Just Say Hello</label>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- NEWS -->
<div class="home-news" id="8">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-head">
					<h3><span>Tips & news</span><i><img src="images/news.png" alt=""/></i></h3>
					<p>Our various kinds of training instruments are effective to beautify your body-shape.</p>
				</div>

				<article>
					<div class="row">
						<div class="col-md-7">
							<img src="images/blog/1.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-5">
							<div class="post-author">
								<img src="images/blog/1/1.png" alt=""/>
								Written by <b>John Doe</b> on <b>07 March 2014</b> 
							</div>
							<div class="post-meta">
								<span><i class="fa fa-tag"></i> Fitness</span>
								<span><i class="fa fa-user"></i> Admin</span>
							</div>
							<h4>Men only group of three private fitness classes."</h4>
							<p>"Men only group of three private fitness classes" Whether or ad hoc individual participating in small classes, can be optional six times in the time display in October and November.</p>
							<a href="#" class="rmore">Continue Reading <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</article>

				<article>
					<div class="row">
						<div class="col-md-5">
							<div class="post-author">
								<img src="images/blog/1/2.png" alt=""/>
								Written by <b>Sara John</b> on <b>27 August 2014</b> 
							</div>
							<div class="post-meta">
								<span><i class="fa fa-tag"></i> Aerobic</span>
								<span><i class="fa fa-user"></i> Admin</span>
							</div>
							<h4>Trio private Ladies<br>sculpting course</h4>
							<p>As the "group of three private Ladies sculpting course" response, for more convenient everyone, regardless of individual or ad hoc participation in small classes, can be optional seven times.</p>
							<a href="#" class="rmore">Continue Reading <i class="fa fa-angle-double-right"></i></a>
						</div>
						<div class="col-md-7">
							<img src="images/blog/2.jpg" class="img-responsive" alt=""/>
						</div>
					</div>
				</article>

				<article class="full-post">
					<div class="row">
						<div class="col-md-12">
							<img src="images/blog/3.jpg" class="img-responsive fp-img" alt=""/>
							<div class="fp-inner">
								<div class="post-author">
									<img src="images/blog/1/2.png" alt=""/>
									Written by <b>Sara John</b> on <b>27 August 2014</b> 
								</div>
								<div class="post-meta">
									<span><i class="fa fa-tag"></i> Aerobic</span>
									<span><i class="fa fa-user"></i> Admin</span>
								</div>
								<h4>WeFit Fitness X innocence counterparts charity music concert</h4>
								<p>WeFit Fitness will do their part, the organizers lent venue for rehearsals to use! Across geographical boundaries with music touched lives<br>brain House charity music concert full of innocence peers start</p>
								<a href="#" class="rmore">Continue Reading <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</article>
				<div class="clearfix space70"></div>
				<a class="lmore" href="#">More</a>
			</div>
		</div>
	</div>
</div>

<!-- FOOTER -->
<footer id="9">
	<div class="overlay3"></div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 footer-widget">
					<div class="f-logo"><img src="images/logo.png" class="img-responsive space30" alt=""/>Wefit</div>
					<p>WeFit Fitness will do their part, the organizers lent venue for rehearsals to use! Across geographical boundaries with music touched lives brain House charity music concert full of innocence peers start</p>
					<div class="space25"></div>
					<p>Donec suscipit vehicula turpis sed lutpat Quisque vitae quam neque. Morbi cilisis placerat dapibus. Donec suscipit vehicula turpis sed lutpat Quisque vitae quam neque.</p>
					<div class="space20"></div>
					<a href="#" class="fmore"><span>Continue Reading</span> <i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="col-md-3 footer-widget">
					<h5>Recent Post</h5>
					<ul class="rposts">
						<li>
							<img src="images/footer/1.jpg" alt=""/>
							<div class="rp-inner">
								<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</a></h4>
								<span class="rp-date">November 22, 2014</span>
							</div>
						</li>
						<li>
							<img src="images/footer/2.jpg" alt=""/>
							<div class="rp-inner">
								<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</a></h4>
								<span class="rp-date">November 22, 2014</span>
							</div>
						</li>
						<li>
							<img src="images/footer/3.jpg" alt=""/>
							<div class="rp-inner">
								<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</a></h4>
								<span class="rp-date">November 22, 2014</span>
							</div>
						</li>
					</ul>
					<a href="#" class="fmore"><span>More Blog</span></a>
				</div>
				<div class="col-md-6 footer-widget">
					<h5>Ask any questions</h5>
					<form class="cform">
						<div class="cf-field">
							<input type="text" placeholder="Your name">
							<i class="fa fa-user"></i>	
						</div>
						<div class="cf-field">
							<input type="email" placeholder="Email">
							<i class="fa fa-envelope"></i>	
						</div>
						<textarea></textarea>
						<button type="submit">Submit</button>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 footer-widget">
					<h5>Accepted Payments</h5>
					<img src="images/payment.png" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-3 footer-widget">
					<h5>Tags</h5>
					<ul class="tags">
						<li><a href="#">Yoga</a></li>
						<li><a href="#">Fitness</a></li>
						<li><a href="#">Body Building</a></li>
						<li><a href="#">Gym</a></li>
						<li><a href="#">Cardio</a></li>
						<li><a href="#">Fit</a></li>
						<li><a href="#">Video</a></li>
						<li><a href="#">Weight Loss</a></li>
					</ul>
				</div>
				<div class="col-md-6 footer-widget">
					<h5>Business Hours</h5>
					<p class="text-medium"><span>Mon - Fri:</span>05:00 am - 09:00 pm</p>
					<p class="text-medium"><span>Sat + Sun:</span>05:00 am - 12:00 pm</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="footer-bottom">
	<div class="contact-content">
		<div class="container">
			<div class="contact-info container">
				<div class="row">
					<div class="col-md-12">
						<ul id="c-info1">
							<li>
								<div class="ci-inner">
									<i class="fa fa-map-marker"></i>
									<p>123 Street / Sample City / New York</p>
								</div>
							</li>
							<li>
								<div class="ci-inner">
									<i class="fa fa-envelope"></i>
									<p>sayhello@wefit.com</p>
								</div>
							</li>
							<li>
								<div class="ci-inner">
									<i class="fa fa-phone"></i>
									<p>-84 944 321 654 987</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="map">
			<div class="gmap">
				<div id="map"></div>
			</div>
		</div>
	</div>

	<div class="map-trigger">
		Map
		<i class="fa fa-angle-double-down"></i>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>Copyright 2014, All Rights Reserved <a href="#">WeFit</a>. Privacy Policy |  Terms & Conditions</p>
			</div>
			<div class="col-md-6">
				<ul class="f-social">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
					<li><a href="#" class="fa fa-linkedin"></a></li>
					<li><a href="#" class="fa fa-youtube"></a></li>
					<li><a href="#" class="fa fa-vimeo-square"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>