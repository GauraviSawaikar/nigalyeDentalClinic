
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Merit Medical Business HTML-5 Template | About Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="css/family.css" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes.css" rel="stylesheet">
<link href="css/all.min.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">






<?php

        $conn = new mysqli('localhost', 'root', '', 'dentist');
		
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   

			$content_id = $_POST['id'];
        
    	
			if( $content_id==1){
				$header1 = $_POST['header'];
					
				$text1 = $_POST['text'];
				$sqll = "UPDATE about SET aboutheader = '$header1', abouttext = '$text1' WHERE id = $content_id";
				$conn->query($sqll);

				$sqll = "SELECT aboutheader, abouttext FROM about WHERE id = $content_id";

				// Execute the query
				$result = $conn->query($sqll);

				// Check if a matching row is found
				if ($result->num_rows > 0) {
					// Fetch the result as an associative array
					$row = $result->fetch_assoc();
					$header_value1 = $row['aboutheader'];
					$text_value1 = $row['abouttext'];

					// Now $header_value contains the header value and $text_value contains the text value where id is 6
				} else {
					echo "No data found for the given ID.";
				}



				$sql2 = "SELECT aboutheader, abouttext FROM about WHERE id = 2";

				// Execute the query
				$result = $conn->query($sql2);

				// Check if a matching row is found
				if ($result->num_rows > 0) {
					// Fetch the result as an associative array
					$row = $result->fetch_assoc();
					$header_value2 = $row['aboutheader'];
					$text_value2 = $row['abouttext'];

					// Now $header_value contains the header value and $text_value contains the text value where id is 6
				} else {
					echo "No data found for the given ID.";
				}
				$sql3 = "SELECT aboutheader, abouttext FROM about WHERE id = 3";

				// Execute the query
				$result = $conn->query($sql3);

				// Check if a matching row is found
				if ($result->num_rows > 0) {
					// Fetch the result as an associative array
					$row = $result->fetch_assoc();
					$header_value3 = $row['aboutheader'];
					$text_value3 = $row['abouttext'];

					// Now $header_value contains the header value and $text_value contains the text value where id is 6
				} else {
					echo "No data found for the given ID.";
				}
			}elseif( $content_id==2){
	
				$header2 = $_POST['header'];
			$text2 = $_POST['text'];
				$sqll = "UPDATE about SET aboutheader = '$header2', abouttext = '$text2' WHERE id = $content_id";
				$conn->query($sqll);
		
		
							$sqll = "SELECT aboutheader, abouttext FROM about WHERE id = $content_id";
		
						// Execute the query
						$result = $conn->query($sqll);
		
						// Check if a matching row is found
						if ($result->num_rows > 0) {
							// Fetch the result as an associative array
							$row = $result->fetch_assoc();
							$header_value1 = $row['aboutheader'];
							$text_value1 = $row['abouttext'];
		
							// Now $header_value contains the header value and $text_value contains the text value where id is 6
						} else {
							echo "No data found for the given ID.";
						}
						$sql1 = "SELECT aboutheader, abouttext FROM about WHERE id = 1";
		
						// Execute the query
						$result = $conn->query($sql1);
		
						// Check if a matching row is found
						if ($result->num_rows > 0) {
							// Fetch the result as an associative array
							$row = $result->fetch_assoc();
							$header_value1 = $row['aboutheader'];
							$text_value1 = $row['abouttext'];
		
							// Now $header_value contains the header value and $text_value contains the text value where id is 6
						} else {
							echo "No data found for the given ID.";
						}
						$sql3 = "SELECT aboutheader, abouttext FROM about WHERE id = 3";
		
						// Execute the query
						$result = $conn->query($sql3);
		
						// Check if a matching row is found
						if ($result->num_rows > 0) {
							// Fetch the result as an associative array
							$row = $result->fetch_assoc();
							$header_value3 = $row['aboutheader'];
							$text_value3 = $row['abouttext'];
		
							// Now $header_value contains the header value and $text_value contains the text value where id is 6
						} else {
							echo "No data found for the given ID.";
						}
		
					}
				
				elseif( $content_id==3){
	
					$header3 = $_POST['header'];
				$text3 = $_POST['text'];
					$sqll = "UPDATE about SET aboutheader = '$header3', abouttext = '$text3' WHERE id = 3";
					$conn->query($sqll);
			
			
								$sqll = "SELECT aboutheader, abouttext FROM about WHERE id = 3";
			
							// Execute the query
							$result = $conn->query($sqll);
			
							// Check if a matching row is found
							if ($result->num_rows > 0) {
								// Fetch the result as an associative array
								$row = $result->fetch_assoc();
								$header_value1 = $row['aboutheader'];
								$text_value1 = $row['abouttext'];
			
								// Now $header_value contains the header value and $text_value contains the text value where id is 6
							} else {
								echo "No data found for the given ID.";
							}
							$sql1 = "SELECT aboutheader, abouttext FROM about WHERE id = 1";
			
							// Execute the query
							$result = $conn->query($sql1);
			
							// Check if a matching row is found
							if ($result->num_rows > 0) {
								// Fetch the result as an associative array
								$row = $result->fetch_assoc();
								$header_value1 = $row['aboutheader'];
								$text_value1 = $row['abouttext'];
			
								// Now $header_value contains the header value and $text_value contains the text value where id is 6
							} else {
								echo "No data found for the given ID.";
							}
							$sql2 = "SELECT aboutheader, abouttext FROM about WHERE id = 2";
			
							// Execute the query
							$result = $conn->query($sql2);
			
							// Check if a matching row is found
							if ($result->num_rows > 0) {
								// Fetch the result as an associative array
								$row = $result->fetch_assoc();
								$header_value2 = $row['aboutheader'];
								$text_value2 = $row['abouttext'];
			
								// Now $header_value contains the header value and $text_value contains the text value where id is 6
							} else {
								echo "No data found for the given ID.";
							}
			
			
			
						}
			
			
			
					}
			
		
						$sqll1 = "SELECT aboutheader, abouttext FROM about WHERE id = 1";

						// Execute the query
						$result = $conn->query($sqll1);
		
						// Check if a matching row is found
						if ($result->num_rows > 0) {
							// Fetch the result as an associative array
							$row = $result->fetch_assoc();
							$header_value1 = $row['aboutheader'];
							$text_value1 = $row['abouttext'];
		
						}
							
						$sqll2 = "SELECT aboutheader, abouttext FROM about WHERE id = 2";
		
						// Execute the query
						$result = $conn->query($sqll2);
		
						// Check if a matching row is found
						if ($result->num_rows > 0) {
							// Fetch the result as an associative array
							$row = $result->fetch_assoc();
							$header_value2 = $row['aboutheader'];
							$text_value2 = $row['abouttext'];
		
						}
		
							$sqll3 = "SELECT aboutheader, abouttext FROM about WHERE id = 3";
		
						// Execute the query
						$result = $conn->query($sqll3);
		
						// Check if a matching row is found
						if ($result->num_rows > 0) {
							// Fetch the result as an associative array
							$row = $result->fetch_assoc();
							$header_value3 = $row['aboutheader'];
							$text_value3 = $row['abouttext'];
		
		
						}			
				



			
			


		







				$conn->close();
	
	





?>






















<div class="page-wrapper">
 	
	<!-- Preloader -->
    <div class="preloader"></div>
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
												
												
											</ul>
										</li>
										<li ><a href="About.php">About</a>
											<ul>
												<li><a href="About.php">About us</a></li>
												
													>
												</li>
											</ul>
										</li>
										<li ><a href="service.php">Services</a>
											<ul>
												<li><a href="service.php">Services</a></li>
												
											</ul>
										</li>
										
										
										
										<li ><a href="blog.php">Blog</a>
											<ul>
												<li><a href="blog.php">Our Blog</a></li>
												
											</ul>
										</li>
										<li ><a href="contact.html">Contact</a>
											<ul>
												<li><a href="contact.html">Contact 01</a></li>
												
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
			<h2>About Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="home.php">Home</a></li>
				<li>About Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	<?php function breakTextWithBR($text, $max_length) {
    $broken_text = [];
    $text_length = strlen($text);
    
    for ($i = 0; $i < $text_length; $i += $max_length) {
        $broken_text[] = substr($text, $i, $max_length);
    }
    
    return implode('<br>', $broken_text);
}

// Example text

$max_chunk_length = 70;

$broken_header1 = breakTextWithBR($header_value1, 1900);
$broken_header2 = breakTextWithBR($header_value2, $max_chunk_length);
$broken_header3 = breakTextWithBR($header_value3, 80);
$broken_text1 = breakTextWithBR($text_value1, 1900);
$broken_text2 = breakTextWithBR($text_value2, $max_chunk_length);
$broken_text3 = breakTextWithBR($text_value3, 70);


?>
	<!-- About Two -->
	
    <section class="about-two style-two">
	<div class="about-two_video"  style="float:right">
							<img src="images/video-image.jpg" alt="" style="width:200px;" />
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video about-two_video-box fa fa-play"><i class="ripple"></i></a>
						</div>
						<div class="about-two_tag" style="float:right">
							<img src="images/tag-icon.png" alt="" />
						</div>
						
		<div class="about-two_pattern" style="background-image:url(images/pattern-11.png)"></div>
		<div class="auto-container">
			
			<div class="row clearfix">
				
				<!-- About Two Content Column -->
				<div class="a">
					<div class="about-two_content-inner">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">About Clinic</div>
							<h2 class="sec-title_heading"><?php echo $broken_header1 ?></h2>
							
						</div>
						
				</div> 
				<div class="row clearfix">
		
					</div>
						</div>
						<p class="about-two_text"><?php echo $text_value1 ?></p>
						
						<div class="row clearfix">
							
							<!-- About Two Feature -->
							<div class="about-two_feature col-lg-6 col-md-6 col-sm-6">
								<div class="about-two_feature-inner">
								<img src="images/check-up.png" style="width: 60px;" alt="" />
									<strong><?php echo $broken_header2 ?></strong>
								</div>
								<?php echo $broken_text2 ?>
							</div>
							
							<!-- About Two Feature -->
							<div class="about-two_feature col-lg-6 col-md-6 col-sm-6">
								<div class="about-two_feature-inner">
								<img src="images/check-up.png" style="width: 60px;" alt="" />>
									<strong><?php echo $broken_header3 ?></strong>
								</div>
								<?php echo $broken_text3 ?>
							</div>
							
						</div>
						<div class="d-flex align-items-center flex-wrap">
							<!-- Button Box -->
							<a href="appointment.html" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">More about</span>
									<span class="text-two">More about</span>
								</span>
							</a>
							<!-- Signature -->
						<!-- 	<div class="about-two_signature"><img src="images/signature.png" alt="" /></div>
							<div class="about-two_author">
								Michel Fernandez<br>
								<span>Founder of Merit Hospital</span>
							</div>
						</div -->
					</div>
				</div>
				
				<!-- About Two Images Column -->
		 
				
			<!-- </div> -->
	
	</section>
	<!-- End About Two -->
	
	<!-- CTA One -->
   <!--  <section class="cta-one">
		<div class="cta-one_pattern" style="background-image:url(images/pattern-12.png)"></div>
		<div class="auto-container">
			<div class="cta-one_inner-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<span class="cta-one_icon flaticon-hospital"></span>
					<div class="cta-one_content">
						<div class="cta-one_title">Quality & Excelence</div>
						<h2 class="cta-one_heading">Expect Nothing But The Best <br> From Medical Technology</h2>
					</div>
					<div class="cta-one_button">
						<a href="appointment.html" class="theme-btn btn-style-three">
							<span class="btn-wrap">
								<span class="text-one">Read More</span>
								<span class="text-two">Read More</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End CTA One -->
	
	<!-- Services One -->
   <!--  <section class="services-one style-two">
		<div class="services-one_pattern" style="background-image:url(images/pattern-2.png)"></div>
		<div class="services-one_pattern-two" style="background-image:url(images/pattern-3.png)"></div>
		<div class="auto-container"> -->
			<!-- Sec Title -->
		<!-- 	<div class="sec-title">
				<div class="sec-title_title">WHAT WE DO</div>
				<h2 class="sec-title_heading">We Deliver Quality Care <br> Giving Services</h2>
			</div> -->
			
		<!-- 	<div class="four-item-carousel owl-carousel owl-theme"> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block">
					<div class="service-block_inner">
						<div class="service-one_smog-layer" style="background-image:url(images/pattern-4.png)"></div>
						<span class="service-block_icon flaticon-examining-table"></span>
						<h4 class="service-block_heading"><a href="intensive-care.html">Holter Monitoring</a></h4>
						<div class="service-block_text">Dicta explicabo. Nemo enim ipsam voluptatem quia voluptas.</div>
						<a class="service-block-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block">
					<div class="service-block_inner">
						<div class="service-one_smog-layer" style="background-image:url(images/pattern-4.png)"></div>
						<span class="service-block_icon flaticon-mri"></span>
						<h4 class="service-block_heading"><a href="intensive-care.html">MRI Scan and Imaging</a></h4>
						<div class="service-block_text">Dicta explicabo. Nemo enim ipsam voluptatem quia voluptas.</div>
						<a class="service-block-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block">
					<div class="service-block_inner">
						<div class="service-one_smog-layer" style="background-image:url(images/pattern-4.png)"></div>
						<span class="service-block_icon flaticon-dentist-chair"></span>
						<h4 class="service-block_heading"><a href="intensive-care.html">Express Blood Tests</a></h4>
						<div class="service-block_text">Dicta explicabo. Nemo enim ipsam voluptatem quia voluptas.</div>
						<a class="service-block-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block">
					<div class="service-block_inner">
						<div class="service-one_smog-layer" style="background-image:url(images/pattern-4.png)"></div>
						<span class="service-block_icon flaticon-ultrasound"></span>
						<h4 class="service-block_heading"><a href="intensive-care.html">Ultrasound and Screenings</a></h4>
						<div class="service-block_text">Dicta explicabo. Nemo enim ipsam voluptatem quia voluptas.</div>
						<a class="service-block-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
			<!-- 	<div class="service-block">
					<div class="service-block_inner">
						<div class="service-one_smog-layer" style="background-image:url(images/pattern-4.png)"></div>
						<span class="service-block_icon flaticon-examining-table"></span>
						<h4 class="service-block_heading"><a href="intensive-care.html">Holter Monitoring</a></h4>
						<div class="service-block_text">Dicta explicabo. Nemo enim ipsam voluptatem quia voluptas.</div>
						<a class="service-block-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
				<!-- <div class="service-block"> -->
			<!-- 		<div class="service-block_inner">
						<div class="service-one_smog-layer" style="background-image:url(images/pattern-4.png)"></div>
						<span class="service-block_icon flaticon-mri"></span>
						<h4 class="service-block_heading"><a href="intensive-care.html">MRI Scan and Imaging</a></h4>
						<div class="service-block_text">Dicta explicabo. Nemo enim ipsam voluptatem quia voluptas.</div>
						<a class="service-block-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
				<!-- Service Block -->
				<div class="service-block">
					<!--div class="service-block_inner">
						<div class="service-one_smog-layer" style="background-image:url(images/pattern-4.png)"></div>
						<span class="service-block_icon flaticon-dentist-chair"></span>
						<h4 class="service-block_heading"><a href="intensive-care.html">Express Blood Tests</a></h4>
						<div class="service-block_text">Dicta explicabo. Nemo enim ipsam voluptatem quia voluptas.</div>
						<a class="service-block-more" href="intensive-care.html">Read More</a>
					</div-->
				</div>
				
				<!-- Service Block -->
			<!-- 	<div class="service-block">
					<div class="service-block_inner">
						<div class="service-one_smog-layer" style="background-image:url(images/pattern-4.png)"></div>
						<span class="service-block_icon flaticon-ultrasound"></span>
						<h4 class="service-block_heading"><a href="intensive-care.html">Ultrasound and Screenings</a></h4>
						<div class="service-block_text">Dicta explicabo. Nemo enim ipsam voluptatem quia voluptas.</div>
						<a class="service-block-more" href="intensive-care.html">Read More</a>
					</div>
				</div> -->
				
			</div>
		</div>
	</section>
	<!-- End Services One -->
	
	<!-- Modern One -->
<!--     <section class="modern-one">
		<div class="modern-one_pattern" style="background-image:url(images/pattern-2.png)"></div>
		<div class="auto-container">
			
			<div class="row clearfix">
				
				<div class="modern-one_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="modern-one_content-inner">
						
						<div class="sec-title">
							<div class="sec-title_title">WHAT WE DO</div>
							<h2 class="sec-title_heading">We Deliver Quality Care <br> Giving Services</h2>
							<div class="sec-title_text">Ut enim ad minim. facilisis suspendisseipsum dolor sit amet dolore consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et  magna aliqua enim ad minim veniam, quis nostrud.</div>
						</div>
						<div class="modern-one_block">
							<div class="modern-one_block-inner">
								<span class="modern-one_icon flaticon-stethoscope"></span>
								<strong class="modern-one_bold">Infection Prevention</strong>
								There are many variations of passages of <br> Lorem Ipsum available majority.
							</div>
						</div>
						<div class="modern-one_button">
							<a href="About.php" class="theme-btn btn-style-two">
								<span class="btn-wrap">
									<span class="text-one">Learn More</span>
									<span class="text-two">Learn More</span>
								</span>
							</a>
						</div>
					</div>
				</div> -->
				<!-- Image Column -->
		<!-- 		<div class="modern-one_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="modern-one_image-inner">
						<div class="modern-one_image">
							<img src="images/modern.jpg" alt="" />
						</div>
						
						<div class="counter-one" style="background-image:url(images/pattern-5.png)">
							<div class="row clearfix">
								
								
								<div class="counter-one_block col-lg-4 col-md-6 col-sm-6">
									<div class="counter-one_inner">
										<span class="counter-one_icon flaticon-doctor"></span>
										<div class="counter-one_counter d-flex">+<span class="odometer" data-count="350"></span></div>
										<div class="counter-one_text">Doctor’s Team</div>
									</div>
								</div>
								
								
								<div class="counter-one_block col-lg-4 col-md-6 col-sm-6">
									<div class="counter-one_inner">
										<span class="counter-one_icon flaticon-surgery-room"></span>
										<div class="counter-one_counter d-flex"><span class="odometer" data-count="2150"></span></div>
										<div class="counter-one_text">Success Mission</div>
									</div>
								</div>
								 -->
								<!-- Counter Column -->
			<!-- 					<div class="counter-one_block col-lg-4 col-md-6 col-sm-6">
									<div class="counter-one_inner">
										<span class="counter-one_icon flaticon-medical-team"></span>
										<div class="counter-one_counter d-flex">+<span class="odometer" data-count="225"></span></div>
										<div class="counter-one_text">Successfull Surgeries</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Modern One -->
	
	<!-- Faq One -->
<!-- 	<section class="faq-one" style="background-image:url(images/2.jpg)">
		<div class="faq-one_pattern" data-parallax='{"y" : 50}' style="background-image:url(images/pattern-26.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<div class="faq-one_accordion-column col-lg-7 col-md-12 col-sm-12">
					<div class="faq-one_accordion-inner">
						
						<div class="sec-title">
							<div class="sec-title_title">Frequently Asked Questions</div>
							<h2 class="sec-title_heading">Get every single answers there if you want</h2>
						</div>
						
						
						<ul class="accordion-box">
							
						
							<li class="accordion block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span></div>What is an academic medical center?</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Neque porro quisquam qui doid lorem ipsum quia dolor sit amet to iconsec tetur adipisci velit. Primis prompta eam eu. Per quod iriante, tollit qualis que urbanitas ei qui. Id liber democritum his.</div>
									</div>
								</div>
							</li>
										
							
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span></div>What doctor will I see?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Neque porro quisquam qui doid lorem ipsum quia dolor sit amet to iconsec tetur adipisci velit. Primis prompta eam eu. Per quod iriante, tollit qualis que urbanitas ei qui. Id liber democritum his.</div>
									</div>
								</div>
							</li> -->
							
							
			<!-- 				<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span></div>What is a medical student?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Neque porro quisquam qui doid lorem ipsum quia dolor sit amet to iconsec tetur adipisci velit. Primis prompta eam eu. Per quod iriante, tollit qualis que urbanitas ei qui. Id liber democritum his.</div>
									</div>
								</div>
							</li>
							
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span></div>How are residents supervised?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Neque porro quisquam qui doid lorem ipsum quia dolor sit amet to iconsec tetur adipisci velit. Primis prompta eam eu. Per quod iriante, tollit qualis que urbanitas ei qui. Id liber democritum his.</div>
									</div>
								</div>
							</li>
							
						</ul>
					
					</div>
				</div> -->
				<!-- Image Column -->
	<!-- 			<div class="faq-one_image-column col-lg-5 col-md-12 col-sm-12">
					<div class="faq-one_image">
						<div class="faq-image_pattern" style="background-image:url(images/pattern-27.png)"></div>
						<img src="images/faq.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Faq One -->
	
	<!-- Team One -->
<!--     <section class="team-one">
		<div class="team-one_pattern" data-parallax='{"x" : 50}' style="background-image:url(images/team-icon.png)"></div>
		<div class="auto-container">
			
			<div class="row clearfix">
			 -->
				
		<!-- 		<div class="team-one_content-column col-lg-5 col-md-12 col-sm-12">
					<div class="team-one_content-inner">
						
						<div class="sec-title">
							<div class="sec-title_title">meet our team</div>
							<h2 class="sec-title_heading">Certified and experienced doctors in our clinic</h2>
						</div>
						<p class="team-one_text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernaturaut odit aut fugit, sed quia consequuntur. Dicta sunt explicabo. Nemo enim ipsam quia voluptas.</p>
						<p class="team-one_text">Wiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. facilisis suspendisseipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						<div class="team-one_buttons">
							<a href="appointment.html" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">Make Appointment</span>
									<span class="text-two">Make Appointment</span>
								</span>
							</a>
							<a href="doctors.html" class="theme-btn btn-style-two">
								<span class="btn-wrap">
									<span class="text-one">view all doctors</span>
									<span class="text-two">view all doctors</span>
								</span>
							</a>
						</div>
						<div class="team-one_telescope">
							<img src="images/telescope.png" alt="" />
						</div>
					</div>
				</div> -->
				
				
	<!-- 			<div class="team-one_teams-column col-lg-7 col-md-12 col-sm-12">
					<div class="team-one_teams-inner">
						<div class="row clearfix">
							
							<div class="team-block_one col-lg-6 col-md-6 col-sm-12">
								<div class="team-block_one-inner">
									<div class="team-block_one-image">
										<div class="team-block_one-gradient"></div>
										<a href="team-detail.html"><img src="images/team-1.jpg" alt="" /></a>
										<div class="team-block_one-social">
											<span class="team-block_one-share flaticon-plus"></span>
											<div class="team-block_one-social-list">
												<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
												<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
												<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
												<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
											</div>
										</div>
										<div class="team-block_one-overlay">
											<h6 class="team-block_one-title"><a href="team-detail.html">Justin Beckham</a></h6>
											<div class="team-block_one-category">Cardiology Specialist</div>
										</div>
									</div>
								</div>
							</div> -->
							
							<!-- Team Block -->
				<!-- 			<div class="team-block_one col-lg-6 col-md-6 col-sm-12">
								<div class="team-block_one-inner">
									<div class="team-block_one-image">
										<div class="team-block_one-gradient"></div>
										<a href="team-detail.html"><img src="images/team-2.jpg" alt="" /></a>
										<div class="team-block_one-social">
											<span class="team-block_one-share flaticon-plus"></span>
											<div class="team-block_one-social-list">
												<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
												<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
												<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
												<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
											</div>
										</div>
										<div class="team-block_one-overlay">
											<h6 class="team-block_one-title"><a href="team-detail.html">Jennifer Winds</a></h6>
											<div class="team-block_one-category">Neurology Specialist</div>
										</div>
									</div>
								</div>
							</div>
							 -->
							<!-- Team Block -->
				<!-- 			<div class="team-block_one col-lg-6 col-md-6 col-sm-12">
								<div class="team-block_one-inner">
									<div class="team-block_one-image">
										<div class="team-block_one-gradient"></div>
										<a href="team-detail.html"><img src="images/team-3.jpg" alt="" /></a>
										<div class="team-block_one-social">
											<span class="team-block_one-share flaticon-plus"></span>
											<div class="team-block_one-social-list">
												<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
												<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
												<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
												<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
											</div>
										</div>
										<div class="team-block_one-overlay">
											<h6 class="team-block_one-title"><a href="team-detail.html">Edward Willey</a></h6>
											<div class="team-block_one-category">General Doctor</div>
										</div>
									</div>
								</div>
							</div> -->
							
							<!-- Team Block -->
			<!-- 				<div class="team-block_one col-lg-6 col-md-6 col-sm-12">
								<div class="team-block_one-inner">
									<div class="team-block_one-image">
										<div class="team-block_one-gradient"></div>
										<a href="team-detail.html"><img src="images/team-4.jpg" alt="" /></a>
										<div class="team-block_one-social">
											<span class="team-block_one-share flaticon-plus"></span>
											<div class="team-block_one-social-list">
												<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
												<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
												<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
												<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
											</div>
										</div>
										<div class="team-block_one-overlay">
											<h6 class="team-block_one-title"><a href="team-detail.html">Smith Johnson</a></h6>
											<div class="team-block_one-category">Dermatologist</div>
										</div>
									</div>
								</div>
							</div> -->
							
		<!-- 				</div>
					</div>
				</div>
				
			</div>
		</div>
	</section> -->
	<!-- End Team One -->
	
	<!-- Newsletter Section -->
	<!-- <section class="newsletter-one">
		<div class="auto-container">
			<div class="newsletter-one_inner-container" style="background-image:url(images/pattern-7.png)">
				<div class="newsletter-one_icon">
					<img src="images/envelope.png" alt="" />
				</div>
				<div class="row clearfix"> -->
					<!-- Title Column -->
				<!-- 	<div class="newsletter-one_title-column col-lg-6 col-md-12 col-sm-12">
						<h3 class="newsletter-one_title">Latest update <br> subscribe to our newsletter</h3>
					</div> -->
					<!-- Form Column -->
					<!-- <div class="newsletter-one_form-column col-lg-6 col-md-12 col-sm-12"> -->
		<!-- 				
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
	</section> -->
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
									<li><span class="icon fa-solid fa-phone fa-fw"></span>Paraste,1/67/B, near Nigalye General Stores,Pernem,Goa 403512</li>
										<li><span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:needhelp@company.com">Nigalye Dental Clinic</a></li>
										<li><span class="icon fa-solid fa-clock fa-fw"></span>070387 00584</li>
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