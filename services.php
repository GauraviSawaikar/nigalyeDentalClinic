<?php  
$conn = new mysqli("localhost", "root", "", "dentist");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


include "includes/header.php";
?>
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
			<h2>Service's</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.php">Home</a></li>
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
					<div class="service-block-two_pattern" style="background-image:url(assets/images/pattern-9.png)"></div>
					<div class="service-block-two_pattern-two" style="background-image:url(assets/images/pattern-10.png)"></div>
					<img src="images/dental.png" class="pro" style="display: block;" alt="" />
					<img id="myImg_<?php echo $i; ?>" src="assets/<?php echo $serviceimage; ?>" alt="Service" style="width:100%; display:none !important;">
					<h4 class="service-block_two-heading"><a href="javascript:;"><?php echo $header_value; ?></a></h4>
					<div class="service-block_two-text"><?php echo $truncated_text; ?></div>
					<?php if (strlen($text_value) > $max_text_length) { ?>
					<a class="service-block_two-more" href="javascript:;">Read More</a>
					<?php } ?>
				</div>
			</div>
			<?php
				}
			?>
				
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
				
			</div>
		</div>
	</section>
	
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

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>