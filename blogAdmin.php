
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Merit Medical Business HTML-5 Template | Blog</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<link id="theme-color-file" href="css/color-themes.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/color-switcher-design.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">
<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="home.php">Company_Name</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           
            <!-- Navbar-->
            <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul> -->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!--<div class="sb-sidenav-menu-heading">Core</div>-->
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inquiries
                            </a>
                            <!--<div class="sb-sidenav-menu-heading">Interface</div>-->
                          <!--   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Customers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div> -->
       <!--                      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Vendors
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div> -->
                            <!--<div class="sb-sidenav-menu-heading">Addons</div>-->
                            <!-- <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Organizations
                            </a> -->

							<a class="nav-link" href="blogAdmin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Blog
                            </a>


                            <a class="nav-link" href="servicesadmin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Services
                            </a>
							<a class="nav-link" href="aboutadmin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                About
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <style>



<?php

     
$conn = new mysqli("localhost", "root", "", "admin3");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Retrieve form data
			$header = $_POST['header'];
			$text = $_POST['text'];
			$id = $_POST['id'];
		
			// Handling file upload
			$uploadDirectory = './uploads/';
			$image = $_FILES['pic']['name'];
			$imageTemp = $_FILES['pic']['tmp_name'];
			$uploadedImagePath = $uploadDirectory . $image;
		
			if (move_uploaded_file($imageTemp, $uploadedImagePath)) {
				
				echo "Header: $header <br>";
				echo "Text: $text <br>";
				echo "Id: $id <br>";
				echo "Image Path: $uploadedImagePath <br>";
			} else {
				echo "Failed to upload image.<br>";
			}
		
			
		$sql = "INSERT INTO blog (blogheader, blogtext, id, image) VALUES ('$header', '$text', '$id', '$uploadedImagePath')";

        if ($conn->query($sql) === TRUE) {
            echo "Data saved to the database successfully.";
        } else {
            echo "Error: " . $conn->error;
        }

        // Close connection
       

    } 








		
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
							<li><span class="icon fa-solid fa-phone fa-fw"></span>Call Anytime: <a href="tel:+92-8800-9806">+92 (8800) 9806</a></li>
							<li><span class="icon fa-solid fa-envelope fa-fw"></span><a href="mailto:info@example.com">info@example.com</a></li>
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
	
						
						<!-- Main Menu End-->
						
							
							<!-- Search Btn -->
						
						
				
        <!--End Header Upper-->
		

	
	<!-- About Sidebar -->
	
    <style>


h1 {
            text-align: center;
            margin-top: 30px;
        }

        form {
            width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top:50px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Additional styles for better visual appearance */

        label {
            font-weight: bold;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #4CAF50;
        }

        input[type="submit"] {
            margin-top: 10px;
        }

        /* Responsive styles for smaller screens */
        @media screen and (max-width: 600px) {
            form {
                padding: 10px;
            }

            input[type="text"],
            textarea {
                padding: 8px;
                font-size: 14px;
            }

            input[type="submit"] {
                font-size: 14px;
            }
        }
		.bg-dark {
    background-color: #232527fa!important;
}
   
  
      
    </style>
	<!-- End About Sidebar -->
	
	<!-- Page Title -->
  
    <!-- End Page Title -->




    <div id="layoutSidenav_content" >
            <h1 style="margin-left: 360px;">Add Content To Blog Page</h1>
    <form method="post" action="blog.php" enctype="multipart/form-data" >
    <label for="image">Image:</label>
    <input type="file"  name="pic" required>
    <br>

        <label for="header">Header:</label>
        <input type="text" id="header" name="header" required>
        <br>
        
        <label for="text">Text:</label>
        <textarea id="text" name="text" rows="4" cols="50" required></textarea>
        <br>
        
        <br>
        <input type="submit" value="Submit">
    

    </form>
	
	<!-- Blog Page -->
	<section class="blog-page">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- News Block One -->
                <style>
                    .col-lg-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 25.333333%;
}


.delete{
    background-color:blue;
}

.delete:hover{

    background-color:red;
}
                    </style>


				<?php 
	$sql = "SELECT blogheader, blogtext, id, image FROM blog  ";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$header = $row["blogheader"];
			$text = $row["blogtext"];
			$id = $row["id"];
			$imagePath = $row["image"];
			
	
			// Now you have individual variables for each fetched row
			

	
	





				 echo '<div class="news-block_one col-lg-4 col-md-6 col-sm-12">';
				echo	'<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">';
					echo	'<div class="news-block_one-image">';
					echo 		'<a href="blog-detail.html"> <img src='.$imagePath.'> </a>';
					echo 	'</div>';
					echo	'<div class="news-block_one-content">';
					echo		'<div class="news-block_one-date"><span>22</span> jan 2023</div>';
					echo 		'<ul class="news-block_one-meta">';
					echo		'<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>';
					echo			'<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>';
					echo		'</ul>';
					echo		'<h5 class="news-block_one-heading"><a href="blog-detail.html">'.$header.'</a></h5>';
				
					echo        '<button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit('.$id.')" ><i class="fa fa-edit"></i></button>';
					echo   		'<button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="del('.$id.')"><i class="fa fa-trash"></i></button>';
					echo	'</div>';
					echo '</div>';
				echo '   </div>';
                
				
  
				

			}
		} else {
			echo "No data found.";
		} 
				$conn->close();			

				?>
<script>
				function del(id){
					if (confirm("Are you sure you want to delete this record?")) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response as needed
                console.log(xhr.responseText);
                // Optionally, you can remove the deleted row from the display here
            }
        };
        xhr.send("id=" + id);
    }
				}




				
            function edit(id){
                location.href="updateblog.php?id="+id;
            }
       
			</script>
               

				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Healthy habits to reduce the risks of heart diseases</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->

				
				<!-- News Block One -->
		<!-- 		<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-3.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Why men should stay on top of health screenings</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-4.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">What does your blood type have to do with your health?</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-5.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Healthy habits to reduce the risks of heart diseases</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
		<!-- 		News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-6.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Why men should stay on top of health screenings</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-1.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">What does your blood type have to do with your health?</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block One -->
		<!-- 		<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-2.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Healthy habits to reduce the risks of heart diseases</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div>
				 -->
				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-3.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Why men should stay on top of health screenings</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
			</div>
			
			<!-- Pagination Outer -->
			<div class="pagination-outer text-center">
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><span class="fa-solid fa-angles-right fa-fw"></span></a></li>
				</ul>
			</div>
			
		</div>
	</section>
	<!-- End Blog Page -->
	
	<!-- Newsletter Section -->

	<!-- End Newsletter Section -->
	
	<!--Main Footer-->
    
							<!--Footer Column-->
                        
					
					<!--big column-->
                   
	
	<!-- Search Popup -->

	<!-- End Search Popup -->
	


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

</body>
</html>