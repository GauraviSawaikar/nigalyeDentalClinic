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
	
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/3.jpg)">
        <div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.php">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
					
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<span class="icon flaticon-placeholder"></span>
								<h6>Address</h6>
								<div class="text">Paraste,1/67/B, near Nigalye General Stores,Pernem,Goa 403512</div>
							</div>
						</div>
						
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<span class="icon flaticon-send-mail"></span>
								<h6>Email</h6>
								<a href="mailto:nigalyedentalclinic@gmail.com">nigalyedentalclinic@gmail.com</a>
							</div>
						</div>
						
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<span class="icon flaticon-telephone"></span>
								<h6>Phone</h6>
								<a href="tel:+917038700584">+91 70387 00584</a>
							</div>
						</div>
						
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<span class="icon flaticon-internet"></span>
								<h6>Social media</h6>
								<ul class="social-box">
									<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
									<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
									<li><a href="https://dribbble.com/" class="fa-brands fa-dribbble fa-fw"></a></li>
									<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-9 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">CONTACT INFO</div>
							<h2 class="sec-title_heading">Get Meeting With us.</h2>
						</div>
						
						<!-- Contact Form -->
						<div class="default-form contact-form">
							<!-- <form method="post" action="sendemail.php" id="contact-form"> -->
							<div class="row clearfix">
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<div class="error-message" id="nameError"></div>
									<input type="text" name="name" id="name" placeholder="Your Name" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<div class="error-message" id="emailError"></div>
									<input type="email" name="email" id="email" placeholder="Your Email" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<div class="error-message" id="phoneNumberError"></div>
									<input type="text" name="phoneNumber" id="phoneNumber" placeholder="Your Phone" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<div class="error-message" id="subjectError"></div>
									<input type="text" name="subject" id="subject" placeholder="Subject" required="">
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<div class="error-message" id="messageError"></div>
									<textarea class="" name="message" id="message" placeholder="Write Your Massage"></textarea>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<button class="theme-btn btn-style-one" onclick="submitForm();">
										<span class="btn-wrap">
											<span class="text-one">Contact Us</span>
											<span class="text-two">Contact Us</span>
										</span>
									</button>
								</div>
								<div class="submission-message" id="submissionMessage"></div>
							</div>
							<!-- </form> -->
						</div>
						
						<!-- Map Boxed -->
						<div class="map-boxed">
							<div class="map-outer">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15361.879222917607!2d73.7770446!3d15.7262669!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfed898221dfe9%3A0x26db2524de8a6e3f!2sNigalye%20Dental%20Clinic!5e0!3m2!1sen!2sin!4v1699877866794!5m2!1sen!2sin" allowfullscreen=""></iframe>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	
	<!-- Sponsors Section -->
    <!-- <section class="sponsors-one">
		<div class="sponsors-one_pattern" style="background-image:url(assets/images/background/pattern-16.png)"></div>
		<div class="sponsors-one_pattern-two" style="background-image:url(assets/images/background/pattern-17.png)"></div>
        <div class="auto-container">
			<div class="sponsors-outer">
				<ul class="sponsors-carousel owl-carousel owl-theme">
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/3.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/4.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/3.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/4.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure></li>
				</ul>
			</div>
        </div>
    </section> -->
    <!-- End Sponsors Section -->
	
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

<script src="assets/js/validate.js"></script>

<script>
	function submitForm() {
		var name = $('#name').val();
		var email = $('#email').val();
		var phoneNumber = $('#phoneNumber').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		var submissionMessage = $('#submissionMessage');

		submissionMessage.removeClass('show'); // Hide any existing submission message

		var isValid = true;

		if (name == '') {
			$('#nameError').text("Please enter your Full Name");
			isValid = false;
		} else {
			$('#nameError').text('');
		}
		if (email === '') {
			$('#emailError').text("Please enter your Email Address");
			isValid = false;
		} else {
			const emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
			
			if (!email.match(emailRegex)) {
				$('#emailError').text("Please enter a valid Email Address");
				isValid = false;
			} else {
				$('#emailError').text('');
			}
		}
		if (phoneNumber == '') {
			$('#phoneNumberError').text("Please enter your Phone Number");
			isValid = false;
		} else {
			$('#phoneNumberError').text('');
		}
		if (subject == '') {
			$('#subjectError').text("Please enter Subject");
			isValid = false;
		} else {
			$('#subjectError').text('');
		}
		if (message == '') {
			$('#messageError').text("Please enter your Message");
			isValid = false;
		} else {
			$('#messageError').text('');
		}

		if (!isValid) {
			return;
		}

		var json_data = {
			name: name,
			email: email,
			phoneNumber: phoneNumber,
			subject: subject,
			message: message
		};
		var submissionMessage = document.getElementById("submissionMessage");

		$.ajax({
			url: "contactform.php",
			method: "post",
			data: json_data,
			dataType: "text", // Set dataType to 'text'
			success: function (response) {
				submissionMessage.textContent = response;
				submissionMessage.style.display = "block";
				submissionMessage.style.backgroundColor = "#26db16";

				$('#name').val('');
				$('#email').val('');
				$('#phoneNumber').val('');
				$('#message').val('');
				$('#subject').val('');
				
				setTimeout(function() {
					submissionMessage.style.opacity = 0;
					setTimeout(function() {
						submissionMessage.style.display = "none";
						submissionMessage.style.opacity = 1; // Reset opacity for the next message
					}, 500);
				}, 3000); 
			},
			error: function (response) {
				submissionMessage.textContent = response.responseText;
				submissionMessage.style.display = "block";
				submissionMessage.style.backgroundColor = "#f54c40";

				setTimeout(function() {
					submissionMessage.style.opacity = 0;
					setTimeout(function() {
						submissionMessage.style.display = "none";
						submissionMessage.style.opacity = 1; // Reset opacity for the next message
					}, 500);
				}, 3000); 
			}
		});
	}
</script>