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
			<h2>Our Blog</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.php">Home</a></li>
				<li>Our Blog</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	
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