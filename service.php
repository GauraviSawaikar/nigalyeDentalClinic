
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Merit Medical Business HTML-5 Template | Service's</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes/default-color.css" rel="stylesheet">
<link href="css/all.min.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<style>
        /* CSS for the popup */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
            z-index: 1;
        }

        .popup img {
            max-width: 80%;
            max-height: 70%;
            margin: 10% auto;
            display: block;
        }

		.close-button {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
        }
</style>

<body class="hidden-bar-wrapper">
<?php


$conn = new mysqli("localhost", "root", "", "dentist");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $header = $_POST['header'];
    $text = $_POST['text'];

    // Insert data into the 'services' table
    $sql = "INSERT INTO services (header, text) VALUES ('$header', '$text')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}




?>

<div class="page-wrapper">
 	
	<!-- Preloader -->
    <div ></div>
	<!-- End Preloader -->
	
 	<!-- Header Style One -->
    <header class="main-header header-style-two">
    	
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<ul class="header_info-list">
						<li><span class="icon fa-solid fa-phone fa-fw"></span>Call Anytime: <a href="tel:070387 00584">070387 00584</a></li>
							<li><span class="icon fa-solid fa-envelope fa-fw"></span><a href="mailto:nigalyedentalclinic@gmail.com">nigalyedentalclinic@gmail.com</a></li>
						</ul>
						
						<!-- Social Box -->
						<ul class="header-social_box-two">
							<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
							<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="https://dribbble.com/" class="fa-brands fa-dribbble fa-fw"></a></li>
							<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container">
					<!-- Logo Box -->
					<div class="logo-box">
						<div class="logo"><a href="home.php"><img src="images/dentallogo.png" alt="" title=""></a></div>
					</div>
					
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						
						<div class="nav-outer">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->    	
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li ><a href="home.php">Home</a>
											<ul>
												<li><a href="home.php">Home</a></li>
												
													
												</li>
												
													
												</li>
											</ul>
										</li>
										<li ><a href="About.php">About</a>
											<ul>
												<li><a href="About.php">About us</a></li>
											
											</ul>
										</li>
										<li ><a href="service.php">Services</a>
											<ul>
												<li><a href="service.php">Services</a></li>
											
											</ul>
										</li>
										
										
										
										<li ><a href="blog.php">Blog</a>
											
										</li>
										<li ><a href="contact.html">Contact</a>
											<ul>
											
											</ul>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						
						<!-- Main Menu End-->
						<!-- <div class="outer-box d-flex align-items-center flex-wrap">
							
							<div class="appointmeny_button-box">
								<a href="#" class="theme-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Appoint Now</span>
										<span class="text-two">Appoint Now</span>
									</span>
								</a>
							</div>
							
							
							<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
							
							
							<div class="nav-btn navSidebar-button fa-regular fa-cart-shopping fa-fw"></div>
							
							<span class="hamburger">
								<span class="top-bun"></span>
								<span class="meat"></span>
								<span class="bottom-bun"></span>
							</span>
							
						</div> -->
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>                    
						
					</div>
				</div>
            </div>
        </div>
        <!--End Header Upper-->
		
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
				
                <!-- Logo -->
                <div class="logo">
                    <a href="home.php" title=""><img src="images/dentallogo.png" alt="" title=""></a>
                </div>
				
                <!-- Right Box -->
                <div class="right-box">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                </div>
				
            </div>
        </div><!-- End Sticky Menu -->
		</div>
		
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-close"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="home.php"><img src="images/logo-small.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
	<!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="close-button">
					<span class="fa fa-solid fa-xmark fa-fw"></span>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
						
							<!-- Title Box -->
							<div class="title-box">
								<h5>Shopping <span>Bag</span></h5>
								<div class="price">$15 from free economy shipping</div>
							</div>
							
							<!-- Empty Cart Box -->
							<div class="empty-cart-box">
								<!-- No Product -->
								<div class="no-cart">
									<span class="icon fa fa-sharp fa-solid fa-cart-shopping fa-fw"></span>
									No products in cart.
								</div>
							</div>
							
							<!-- Lower Box -->
							<div class="lower-box">
								<h5>Popular <span>Suggestions</span></h5>
									
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="images/post-thumb-1.jpg" alt="" />
										</div>
										<h6><a href="#">Hematology Machine</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$125</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="images/post-thumb-2.jpg" alt="" />
										</div>
										<h6><a href="#">Dermatology</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$205</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="images/post-thumb-3.jpg" alt="" />
										</div>
										<h6><a href="#">Cardiology</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$125</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- About Sidebar -->
	<div class="about-sidebar">
		<div class="gradient-layer"></div>
		<!-- Close Button -->
		<div class="close-sidebar-widget close-button">
			<span class="fa fa-solid fa-xmark fa-fw"></span>
		</div>
		<div class="sidebar-inner">
			<div class="upper-box">
				<div class="image">
					<img src="images/modern.jpg" alt="" />
				</div>
				<div class="content-box">
					<h3>About <span>Merit</span></h3>
					<div class="text">Ut enim ad minim. facilisis suspendisseipsum dolor sit amet dolore consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et magna aliqua enim ad minim veniam, quis nostrud.</div>
					<ul class="about-one_list">
						<li>Medicine and instrument</li>
						<li>Instant Operation & Appointment</li>
						<li>From Scintific Jornal</li>
						<li>100% Expert Doctors</li>
					</ul>
				</div>
			</div>
			<!-- Social Box -->
			<div class="social-box">
				<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
				<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
				<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
				<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
			</div>
		</div>
	</div>
	<!-- End About Sidebar -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/3.jpg)">
        <div class="auto-container">
			<h2>Services</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="home.php">Home</a></li>
				<li>Service's</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Services Page -->
    <section class="services-page">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="sec-title_title">WHAT WE DO</div>
				<h2 class="sec-title_heading">We Deliver Quality Care <br> Dental Services</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block -->
				

				<?php
$sql = "SELECT header,serviceimage,text FROM services";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$i =0;
    while ($row = $result->fetch_assoc()) {
		$i++;
        $header_value = $row['header'];
		$serviceimage=$row['serviceimage'];
        $text_value = $row['text'];
		$max_text_length = 100; // You can adjust this value as needed

		if (strlen($text_value) > $max_text_length) {
			// Truncate the text to 100 characters and add "..."
			$truncated_text = substr($text_value, 0, $max_text_length) . '...';
		} else {
			$truncated_text = $text_value; 
		}
?>
<div class="service-block_two col-lg-3 col-md-4 col-sm-6" onClick="popupShow(<?php echo $i; ?>);">
    <div class="service-block_two-inner">
        <div class="service-block-two_pattern" style="background-image:url(images/pattern-9.png)"></div>
        <div class="service-block-two_pattern-two" style="background-image:url(images/pattern-10.png)"></div>
        <img src="images/dental.png" class="pro" style="display: block;" alt="" />
        <img id="myImg_<?php echo $i; ?>" src="<?php echo $serviceimage; ?>" alt="Service" style="width:100%; display:none !important;">
        <h4 class="service-block_two-heading"><a href="#"><?php echo $header_value; ?></a></h4>
        <div class="service-block_two-text"><?php echo $truncated_text; ?></div>
		<?php if (strlen($text_value) > $max_text_length) { ?>
        <a class="service-block_two-more" href="#">Read More</a>
		<?php } ?>
    </div>
</div>
<?php
    }?>
	
	 <!-- Popup container -->
    <div id="imagePopup" class="popup" onClick="closePopup();">
		<span class="close-button" onclick="closePopup();">&times;</span>
        <img id="popupImage" alt="Popup Image">
    </div>
	<?php
} else {
    echo "No data found in the 'services' table.";
}
?>

		<!-- Image modal form -->
		
		<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>

function popupShow(counter) {
    $("#imagePopup").css("display", "block");
    var img = $("#myImg_"+counter).attr("src"); // Use jQuery to select the image source
    console.log(img);
    $("#popupImage").attr("src", img);
}



function closePopup() {
            $("#imagePopup").css("display", "none");
        }
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
				
				
				<!-- Service Block -->
			<!-- 	<div class="service-block_two col-lg-3 col-md-4 col-sm-6">
					<div class="service-block_two-inner">
						<div class="service-block-two_pattern" style="background-image:url(images/pattern-9.png)"></div>
						<div class="service-block-two_pattern-two" style="background-image:url(images/pattern-10.png)"></div>
						<span class="service-block_two-icon flaticon-medicine"></span>
						<h4 class="service-block_two-heading"><a href="intensive-care.html"><?php echo $header_value2  ?></a></h4>
						<div class="service-block_two-text"><?php echo $text_value2 ?></div>
						<a class="service-block_two-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block_two col-lg-3 col-md-4 col-sm-6">
					<div class="service-block_two-inner">
						<div class="service-block-two_pattern" style="background-image:url(images/pattern-9.png)"></div>
						<div class="service-block-two_pattern-two" style="background-image:url(images/pattern-10.png)"></div>
						<span class="service-block_two-icon flaticon-research"></span>
						<h4 class="service-block_two-heading"><a href="intensive-care.html"><?php echo $header_value3 ?></a></h4>
						<div class="service-block_two-text"><?php echo $text_value3 ?></div>
						<a class="service-block_two-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block_two col-lg-3 col-md-4 col-sm-6">
					<div class="service-block_two-inner">
						<div class="service-block-two_pattern" style="background-image:url(images/pattern-9.png)"></div>
						<div class="service-block-two_pattern-two" style="background-image:url(images/pattern-10.png)"></div>
						<span class="service-block_two-icon flaticon-medical-history"></span>
						<h4 class="service-block_two-heading"><a href="intensive-care.html"><?php echo $header_value4 ?></a></h4>
						<div class="service-block_two-text"><?php echo $text_value4 ?></div>
						<a class="service-block_two-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block_two col-lg-3 col-md-4 col-sm-6">
					<div class="service-block_two-inner">
						<div class="service-block-two_pattern" style="background-image:url(images/pattern-9.png)"></div>
						<div class="service-block-two_pattern-two" style="background-image:url(images/pattern-10.png)"></div>
						<span class="service-block_two-icon flaticon-doctor"></span>
						<h4 class="service-block_two-heading"><a href="intensive-care.html"><?php echo $header_value5 ?></a></h4>
						<div class="service-block_two-text"><?php echo $text_value5 ?></div>
						<a class="service-block_two-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block_two col-lg-3 col-md-4 col-sm-6">
					<div class="service-block_two-inner">
						<div class="service-block-two_pattern" style="background-image:url(images/pattern-9.png)"></div>
						<div class="service-block-two_pattern-two" style="background-image:url(images/pattern-10.png)"></div>
						<span class="service-block_two-icon flaticon-mri"></span>
						<h4 class="service-block_two-heading"><a href="intensive-care.html"><?php echo $header_value6 ?></a></h4>
						<div class="service-block_two-text"><?php echo $text_value6 ?></div>
						<a class="service-block_two-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block_two col-lg-3 col-md-4 col-sm-6">
					<div class="service-block_two-inner">
						<div class="service-block-two_pattern" style="background-image:url(images/pattern-9.png)"></div>
						<div class="service-block-two_pattern-two" style="background-image:url(images/pattern-10.png)"></div>
						<span class="service-block_two-icon flaticon-ambulance"></span>
						<h4 class="service-block_two-heading"><a href="intensive-care.html"><?php echo $header_value7 ?></a></h4>
						<div class="service-block_two-text"><?php echo $text_value7 ?></div>
						<a class="service-block_two-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block_two col-lg-3 col-md-4 col-sm-6">
					<div class="service-block_two-inner">
						<div class="service-block-two_pattern" style="background-image:url(images/pattern-9.png)"></div>
						<div class="service-block-two_pattern-two" style="background-image:url(images/pattern-10.png)"></div>
						<span class="service-block_two-icon flaticon-ultrasound"></span>
						<h4 class="service-block_two-heading"><a href="intensive-care.html"><?php echo $header_value8 ?></a></h4>
						<div class="service-block_two-text"><?php echo $text_value8 ?></div>
						<a class="service-block_two-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
			</div>
		</div>
	</section>
	
	
	<!-- Testimonial Two -->
    <section class="testimonial-two style-two">
		<div class="testimonial-two_pattern" style="background-image:url(images/pattern-15.png)"></div>
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2 class="sec-title_heading">Testimonials</h2>
			</div>
				
			<div class="testimonial-outer">
		
				<!-- Client Testimonial Carousel -->
				<div class="client-testimonial-carousel owl-carousel owl-theme">
				
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
					<!-- Testimonial Two -->
					<div class="testimonial-block_two">
						<div class="testimonial-block_two-inner">
							<div class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></div>
							<div class="testimonial-block_two-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going passage</div>
						</div>
					</div>
					
				</div>
				
				<!--Product Thumbs Carousel-->
				<div class="client-thumb-outer">
					<div class="client-thumbs-carousel owl-carousel owl-theme">
						<div class="thumb-item">
							<figure class="thumb-box"><img src="images/author-1.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="images/author-2.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="images/author-3.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="images/author-1.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="images/author-2.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">Nathan Hirsch</div>
								<div class="location">New York</div>
							</div>
						</div>
						<div class="thumb-item">
							<figure class="thumb-box"><img src="images/author-3.jpg" alt=""></figure>
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
	
	<!-- Question One -->
	<section class="question-one style-two">
		<div class="auto-container">
			<div class="question-one-inner_container" style="background-image:url(images/pattern-14.png)">
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
										<li><span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:needhelp@company.com">Nigalye Dental Clinic</a></li>
										<li><span class="icon fa-solid fa-clock fa-fw"></span>070387 00584</li>
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
									
									<div class="col-lg-6 col-md-12 col-sm-12 form-group">
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
	
	<!-- Newsletter Section / Style Two -->
	<section class="newsletter-one style-two">
		<div class="auto-container">
			<div class="newsletter-one_inner-container" style="background-image:url(images/pattern-7.png)">
				<div class="newsletter-one_icon">
					<img src="images/icons/envelope.png" alt="" />
				</div>
				<div class="row clearfix">
					<!-- Title Column -->
					<div class="newsletter-one_title-column col-lg-6 col-md-12 col-sm-12">
						<h3 class="newsletter-one_title">Latest update <br> subscribe to our newsletter</h3>
					</div>
					<!-- Form Column -->
					<div class="newsletter-one_form-column col-lg-6 col-md-12 col-sm-12">
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<form method="post" action="contact.html">
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Your Email Address" required>
									<button type="submit" class="theme-btn fa-solid fa-paper-plane fa-fw"></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Newsletter Section -->
	
	<!--Main Footer-->
    <footer class="main-footer" style="background-image: url(images/pattern-8.png)">
		<!-- Vector One -->
		<span class="footer-vector_one">
			<img src="images/footer-vector-1.png" alt="" />
		</span>
		<!-- Vector Two -->
		<span class="footer-vector_two">
			<img src="images/footer-vector-2.png" alt="" />
		</span>
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="main-footer_widgets">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="main-footer_logo">
                                    	<a href="home.php"><img src="images/footer-logo.png" alt="" /></a>
                                    </div>
                                    <div class="main-footer_text">It helps designers plan out where the content will sit, the content to be written and approved.</div>
									<!-- Social Box -->
									<ul class="footer-social_box">
										<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
										<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
										<li><a href="https://dribbble.com/" class="fa-brands fa-dribbble fa-fw"></a></li>
										<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4 class="main-footer_title">Service</h4>
									<ul class="main-footer_list">
										<li><a href="#">Emergency</a></li>
										<li><a href="#">Psychotherapy</a></li>
										<li><a href="#">Hourly Care</a></li>
										<li><a href="#">Respite Home</a></li>
										<li><a href="#">Advanced Care</a></li>
										<li><a href="#">Laboratory</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<h4 class="main-footer_title">Recent Posts</h4>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="news-widget_image">
											<img src="images/news-widget-1.jpg" alt="" />
										</div>
										<div class="news-widget_post-date">DECEMBER 12, 2022</div>
										<h6 class="news-widget_title"><a href="blog-detail.html">Get the exercise limited solution.</a></h6>
                                    </div>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
										<div class="news-widget_image">
											<img src="images/news-widget-2.jpg" alt="" />
										</div>
										<div class="news-widget_post-date">DECEMBER 12, 2022</div>
										<h6 class="news-widget_title"><a href="blog-detail.html">Transfusion Strategy And Heart Surgery</a></h6>
                                    </div>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h4 class="main-footer_title">Contact Info</h4>
									<ul class="main-footer_contact-list">
										<li><span class="icon fa-solid fa-phone fa-fw"></span>80 Broklyn Golden Street, New York. USA</li>
										<li><span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
										<li><span class="icon fa-solid fa-clock fa-fw"></span>Mon - Sat 8:00 - 6:30, <br> Sunday - CLOSED</li>
									</ul>
									
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="main-footer_bottom">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="footer_copyright">Developed by Infipre</div>
					<!-- Scroll To Top -->
					<div class="footer-scroll_top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
				</div>
			</div>
			
		</div>
	</footer>
	
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

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
	<div class="color-trigger">
		<i class="fa-solid fa-gear fa-fw"></i>
	</div>
	<div class="color-palate-inner">
		<div class="color-palate-head">
			<h6>Choose Options</h6>
		</div>
		
		<!-- Colors -->
		<div class="various-color clearfix">
			<div class="colors-list">
				<span class="palate default-color active" data-theme-file="css/color-themes/default-color.css"></span>
				<span class="palate green-color" data-theme-file="css/color-themes/green-color.css"></span>
				<span class="palate olive-color" data-theme-file="css/color-themes/blue-color.css"></span>
				<span class="palate orange-color" data-theme-file="css/color-themes/orange-color.css"></span>
				<span class="palate purple-color" data-theme-file="css/color-themes/purple-color.css"></span>
				<span class="palate teal-color" data-theme-file="css/color-themes/teal-color.css"></span>
				<span class="palate brown-color" data-theme-file="css/color-themes/brown-color.css"></span>
				<span class="palate yellow-color" data-theme-file="css/color-themes/yellow-color.css"></span>
			</div>
		</div>
				
		<h6>RTL Version</h6>
		<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
		<h6>Boxed Version</h6>
		<ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
		<h6>Want Sticky Header</h6>
		<ul class="header-version option-box"> <li class="box">No</li> <li>Yes</li></ul>
		<h6>Dark Verion</h6>
		<ul class="dark-version option-box"> <li class="box">Yes</li> <li>No</li></ul>
		
		<div class="purchase-box">
			You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.
			<a href="#" class="theme-btn btn-style-two">
				<span class="btn-wrap">
					<span class="text-one">buy now</span>
					<span class="text-two">buy now</span>
				</span>
			</a>
		</div>
		
	</div>
</div>
<!-- End Color Palate / Color Switcher -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/odometer.js"></script>
<script src="js/parallax-scroll.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>
<script src="js/all.min.js"></script>

</body>
</html>