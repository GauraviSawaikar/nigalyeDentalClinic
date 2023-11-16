<?php  
include "includes/header.php";
?>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
	<?php  
	include "includes/navbar.php";
	?>
	
	
	<!-- Slider One -->
    <section class="slider-one style-two">
		<div class="main-slider-carousel owl-carousel owl-theme">
		
			<!-- Slide 01 -->
			<div class="slider-one_slide" style="background-image:url(assets/images/main-slider/image-5.jpg)">
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="d-flex justify-content-center">
						<div class="slider-one_content">
							<div class="slider-one_content-inner">
								<div class="slider-one_title">Best Service For You</div>
								<h1 class="slider-one_heading">Your Health is Our <span>Pirority</span></h1>
								<!-- <div class="row clearfix">
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="slider-one_list">
											<li>Latest Advancements</li>
											<li>Critical & Palliative Care</li>
										</ul>
									</div>
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="slider-one_list">
											<li>Professional Healthcare</li>
											<li>State of the Art Research</li>
										</ul>
									</div>
								</div> -->
								<!-- <div class="slider-one_buttons">
									<a href="appointment.html" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Make Appointment</span>
											<span class="text-two">Make Appointment</span>
										</span>
									</a>
									<a href="about.html" class="theme-btn btn-style-two">
										<span class="btn-wrap">
											<span class="text-one">Learn More</span>
											<span class="text-two">Learn More</span>
										</span>
									</a>
								</div> -->
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- End Slide 01 -->
			
			<!-- Slide 02 -->
			<div class="slider-one_slide" style="background-image:url(assets/images/main-slider/image-1.jpg)">
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="d-flex justify-content-center">
						<div class="slider-one_content">
							<div class="slider-one_content-inner">
								<div class="slider-one_title">Best Service For You</div>
								<h1 class="slider-one_heading">Your Health is Our <span>Pirority</span></h1>
								<!-- <div class="row clearfix">
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="slider-one_list">
											<li>Latest Advancements</li>
											<li>Critical & Palliative Care</li>
										</ul>
									</div>
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="slider-one_list">
											<li>Professional Healthcare</li>
											<li>State of the Art Research</li>
										</ul>
									</div>
								</div>
								<div class="slider-one_buttons">
									<a href="appointment.html" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Make Appointment</span>
											<span class="text-two">Make Appointment</span>
										</span>
									</a>
									<a href="about.html" class="theme-btn btn-style-two">
										<span class="btn-wrap">
											<span class="text-one">Learn More</span>
											<span class="text-two">Learn More</span>
										</span>
									</a>
								</div> -->
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- End Slide 02 -->
			
			<!-- Slide 03 -->
			<div class="slider-one_slide" style="background-image:url(assets/images/main-slider/image-1.jpg)">
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="d-flex justify-content-center">
						<div class="slider-one_content">
							<div class="slider-one_content-inner">
								<div class="slider-one_title">Best Service For You</div>
								<h1 class="slider-one_heading">Your Health is Our <span>Pirority</span></h1>
								<!-- <div class="row clearfix">
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="slider-one_list">
											<li>Latest Advancements</li>
											<li>Critical & Palliative Care</li>
										</ul>
									</div>
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<ul class="slider-one_list">
											<li>Professional Healthcare</li>
											<li>State of the Art Research</li>
										</ul>
									</div>
								</div>
								<div class="slider-one_buttons">
									<a href="appointment.html" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Make Appointment</span>
											<span class="text-two">Make Appointment</span>
										</span>
									</a>
									<a href="about.html" class="theme-btn btn-style-two">
										<span class="btn-wrap">
											<span class="text-one">Learn More</span>
											<span class="text-two">Learn More</span>
										</span>
									</a>
								</div> -->
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- End Slide 03 -->
			
		</div>
    </section>
    <!-- End Main Slider Section -->
	
	<!-- Services Two -->
    <section class="services-two">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">OUR SPECIALTIES</div>
				<h2 class="sec-title_heading">Our Services</h2>
			</div>
			
			<div class="services-carousel owl-carousel owl-theme">
				
			<?php
			$conn = new mysqli("localhost", "root", "", "dentist");

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT serviceimage,header, text FROM services";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$header_value = $row['header'];
					$text_value = $row['text'];
					$serviceimage = $row['serviceimage'];
					$max_text_length = 60; // You can adjust this value as needed
					$truncated_text = strlen($text_value) > $max_text_length ? substr($text_value, 0, $max_text_length) . "..." : $text_value;

			?>
				<div class="service-block_two">
					<div class="service-block_two-inner" style="height: 430px;">
						<div class="service-block-two_pattern" style="background-image:url(assets/images/pattern-9.png)"></div>
						<div class="service-block-two_pattern-two" style="background-image:url(assets/images/pattern-10.png)"></div>
						<img src="assets/<?php echo $serviceimage ?>" class="pro" width="200" height="200" style="display: block;" alt="" />
						<h4 class="service-block_two-heading" style="height: 66px;"><a href="javascript:;"><?php echo $header_value ?></a></h4>
						<div class="service-block_two-text"><?php echo $truncated_text ?></div>
						<a class="service-block_two-more" href="javascript:;">Read More</a>
					</div>
				</div>
			<?php
				}
			} else {
				echo "No data found in the 'services' table.";
			}
			?>
				
			</div>
		</div>
	</section>
	<!-- End Services Two -->
	
	<!-- About Two -->
    <section class="about-two">
		<div class="about-two_pattern" style="background-image:url(assets/images/background/pattern-11.png)"></div>
		<div class="auto-container">
			
			<div class="row clearfix">
				
				<!-- About Two Content Column -->
				<div class="about-two_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_content-inner">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">About Clinic</div>
							<h2 class="sec-title_heading">Welcome to Nigalye dental clinic!</h2>
						</div>
						<p class="about-two_text">Nigalye Dental Clinic is a modern dental clinic situated in Pernem, Goa. The clinic was started in 2021, with the aim to help people to achive and maintain healthy & beutiful smile that lasts a lifetime.</p>
						<p class="about-two_text">We at Nigalye Dental Clinic are committed to provide top-quality dental care to our patients. .</p>
						<div class="row clearfix">
							
							<!-- About Two Feature -->
							<div class="about-two_feature col-lg-6 col-md-6 col-sm-6">
								<div class="about-two_feature-inner">
									<img class="about-two_feature-icon " src="assets/images/serviceLogo.png" height="80" width="60"></img>
									<strong>Routine check-ups and cleaningn</strong>
								</div>
								It is a long established fact
								that a reader will be distracted.
							</div>
							
							<!-- About Two Feature -->
							<div class="about-two_feature col-lg-6 col-md-6 col-sm-6">
								<div class="about-two_feature-inner">
									<img class="about-two_feature-icon " src="assets/images/serviceLogo.png" height="80" width="60"></img>
									<strong>Cosmetic treatments</strong>
								</div>
								It is a long established fact
								that a reader will be distracted.
							</div>
							
						</div>
						<div class="d-flex align-items-center flex-wrap">
							<!-- Button Box -->
							<a href="about.php" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">More about</span>
									<span class="text-two">More about</span>
								</span>
							</a>
							<!-- Signature -->
							<!-- <div class="about-two_signature"><img src="assets/images/icons/signature.png" alt="" /></div>
							<div class="about-two_author">
								Michel Fernandez<br>
								<span>Founder of Merit Hospital</span>
							</div> -->
						</div>
					</div>
				</div>
				
				<!-- About Two Images Column -->
				<div class="about-two_images-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_images-inner">
						
						<!-- About Two Video -->
						<div class="about-two_video">
							<img src="assets/images/resource/video-image.jpg" alt="" />
							<!-- <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video about-two_video-box fa fa-play"><i class="ripple"></i></a> -->
						</div>
						<div class="about-two_tag">
							<img src="assets/images/icons/tag-icon.png" alt="" />
						</div>
						<div class="about-two_image">
							<img src="assets/images/resource/about-3.jpg" alt="" />
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Two -->
	
	
	<!-- Team Two -->
	<section class="team-two">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">our team</div>
				<h2 class="sec-title_heading">Certified and experienced <br> doctors in our clinic</h2>
			</div>
			
			<div class="row clearfix" style="justify-content: center;">
				
				<div class="team-block_two col-lg-3 col-md-6 col-sm-6">
					<div class="team-block_two-inner">
						<div class="team-block_two-image">
							<div class="team-block_two-gradient"></div>
							<a href="javascript:;"><img src="assets/images/Dr.GauriNigalye.png" alt="" /></a>
							<div class="team-block_two-social">
								<span class="team-block_two-share flaticon-plus"></span>
								<div class="team-block_two-social-list">
									<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
									<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
									<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
									<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
								</div>
							</div>
						</div>
						<div class="team-block_two-content">
							<h6 class="team-block_two-title"><a href="javascript:;">Dr.Gauri Nigalye</a></h6>
							<div class="team-block_two-category">BDS, Founder</div>
						</div>
					</div>
				</div>

				<!-- Team Block Two -->
				<div class="team-block_two col-lg-3 col-md-6 col-sm-6">
					<div class="team-block_two-inner">
						<div class="team-block_two-image">
							<div class="team-block_two-gradient"></div>
							<a href="javascript:;"><img src="assets/images/Dr.Atifshaikh.png" alt="" /></a>
							<div class="team-block_two-social">
								<span class="team-block_two-share flaticon-plus"></span>
								<div class="team-block_two-social-list">
									<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
									<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
									<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
									<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
								</div>
							</div>
						</div>
						<div class="team-block_two-content">
							<h6 class="team-block_two-title"><a href="javascript:;">Dr.Atif Shaikh</a></h6>
							<div class="team-block_two-category">M.D.S (Orthodontics)</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block Two -->
				<div class="team-block_two col-lg-3 col-md-6 col-sm-6">
					<div class="team-block_two-inner">
						<div class="team-block_two-image">
							<div class="team-block_two-gradient"></div>
							<a href="javascript:;"><img src="assets/images/Dr.AbhishekKumar.png" alt="" /></a>
							<div class="team-block_two-social">
								<span class="team-block_two-share flaticon-plus"></span>
								<div class="team-block_two-social-list">
									<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
									<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
									<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
									<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
								</div>
							</div>
						</div>
						<div class="team-block_two-content">
							<h6 class="team-block_two-title"><a href="javascript:;">Dr.Abhishek Kumar</a></h6>
							<div class="team-block_two-category">M.D.S (Oral maxillofacial surgery) implant specialist</div>
						</div>
					</div>
				</div>

				<!-- <div class="team-block_two col-lg-3 col-md-6 col-sm-6">
					<div class="team-block_two-inner">
						<div class="team-block_two-image">
							<div class="team-block_two-gradient"></div>
							<a href="javascript:;"><img src="assets/images/Dr.AbhishekKumar.png" alt="" /></a>
							<div class="team-block_two-social">
								<span class="team-block_two-share flaticon-plus"></span>
								<div class="team-block_two-social-list">
									<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
									<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
									<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
									<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
								</div>
							</div>
						</div>
						<div class="team-block_two-content">
							<h6 class="team-block_two-title"><a href="javascript:;">Dr.Abhishek Kumar</a></h6>
							<div class="team-block_two-category">M.D.S (Oral maxillofacial surgery) implant specialist</div>
						</div>
					</div>
				</div> -->
				
				
			</div>
			
		</div>
	</section>
	<!-- End Team Two -->
	
	<!-- Question One -->
	<section class="question-one">
		<div class="auto-container">
			<div class="question-one-inner_container" style="background-image:url(assets/images/background/pattern-14.png)">
				<div class="row clearfix">
					<!-- Title Column -->
					<div class="question-one_title-column col-lg-5 col-md-12 col-sm-12">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">CONTACT US</div>
							<h2 class="sec-title_heading">Have questions? Get in touch!</h2>
							<div class="sec-title_text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Ut enim ad minim.</div>
						</div>
						<ul class="question-one_contact-list">
							<li><span class="icon fa-solid fa-phone fa-fw"></span>Paraste,1/67/B, near Nigalye General Stores,Pernem,Goa 403512</li>
							<li><span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:nigalyedentalclinic@gmail.com">nigalyedentalclinic@gmail.com</a></li>
							<li><span class="icon fa-solid fa-clock fa-fw"></span>Mon - Sat 10:00 - 1:00 and 4:00 - 8:00, <br> Sunday - CLOSED</li>
						</ul>
					</div>
					<!-- Form Column -->
					<div class="question-one_form-column col-lg-7 col-md-12 col-sm-12">
						
						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="contact.html">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Name" required="">
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="email" placeholder="Email" required="">
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="phone" placeholder="Phone" required="">
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="department" placeholder="Department" required="">
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="" name="message" placeholder="how can i help you? Feel free to get in touch"></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<!-- Button Box -->
										<div class="button-box align-items-center flex-wrap d-flex">
											<button class="theme-btn btn-style-one">
												<span class="btn-wrap">
													<span class="text-one">get in touch</span>
													<span class="text-two">get in touch</span>
												</span>
											</button>
											<div class="check-box">
												<input type="checkbox" name="remember-password" id="type-1">
												<label for="type-1">I agree that my submitted data is collected and stored.</label>
											</div>
										</div>
									</div>
									
								</div>
							</form>
						</div>
						<!-- End Default Form -->
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Question One -->
	
	<!-- Testimonial Two -->
    <section class="testimonial-two">
		<div class="testimonial-two_pattern" style="background-image:url(assets/images/background/pattern-15.png)"></div>
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="sec-title_title">Customer says</div>
				<h2 class="sec-title_heading">Testimonials</h2>
			</div>
			<a class="testimonial-two-reviews" href="#">Read More Reviews</a>
				
			<div class="testimonial-outer">
		
				<!-- Client Testimonial Carousel -->
				<div class="client-testimonial-carousel owl-carousel owl-theme">
				
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="assets/images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="assets/images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="assets/images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="assets/images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="assets/images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="assets/images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
				</div>
				
				<!--Product Thumbs Carousel-->
				<div class="client-thumb-outer">
					<div class="client-thumbs-carousel owl-carousel owl-theme">
						<div class="thumb-item">
							<figure class="thumb-box"><img src="assets/images/resource/author-1.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="assets/images/resource/author-2.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="assets/images/resource/author-3.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="assets/images/resource/author-1.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="assets/images/resource/author-2.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="assets/images/resource/author-3.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Testimonial Two -->
	
	<?php  
	include "includes/footerBar.php";
	?>

	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa fa-solid fa-xmark fa-fw"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
	
</div>
<!-- End PageWrapper -->

<?php  
include "includes/footer.php";
?>

