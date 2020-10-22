<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Homes || Sekolah Tinggi Manajemen dan Informatika Komputer IBBI Medan</title>
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/bootstrap.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/font-awesome.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/style.css'?>" />
    <script src="<?php echo base_url().'template/js/jquery.min.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'template/js/ddsmoothmenu.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'template/js/contentslider.js'?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/jcarousellite_1.0.1.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/jquery.easing.1.1.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/cufon-yui.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/DIN_500.font.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/menu.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/tabs.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/jquery.mousewheel-3.0.4.pack.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/jquery.fancybox-1.3.4.pack.js'?>"></script>
    <?php 
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
                
    ?>
</head>

<body>
	<!-- header -->
	<?php $this->load->view('depan/v_header'); ?>  
	<!-- Pages -->
	<?php $this->load->view('depan/v_page'); ?>  
    <!-- End Pages -->
	<!-- testimonials -->
	<?php $this->load->view('depan/v_testimonial');?>
	<!-- //testimonials -->
	<?php $this->load->view('depan/v_footer');?>

	<!-- js files -->
	<!-- js -->
    <script type="text/javascript" src="<?php echo base_url().'template/js/jquery-2.1.4.min.js'?>" ></script>
	<!-- bootstrap -->
    <script type="text/javascript" src="<?php echo base_url().'template/js/bootstrap.js'?>" ></script>
	<!-- stats numscroller-js-file -->
    <script type="text/javascript" src="<?php echo base_url().'template/js/numscroller-1.0.js'?>" ></script>
	<!-- //stats numscroller-js-file -->

	<!-- Flexslider-js for-testimonials -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 1
					},
					tablet: {
						changePoint: 768,
						visibleItems: 1
					}
				}
			});

		});
	</script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/jquery.flexisel.js'?>" ></script>
	<!-- //Flexslider-js for-testimonials -->
	<!-- smooth scrolling -->
    <script type="text/javascript" src="<?php echo base_url().'template/js/SmoothScroll.min.js'?>" ></script>
	<script type="text/javascript" src="<?php echo base_url().'template/js/move-top.js'?>" ></script>
    <script type="text/javascript" src="<?php echo base_url().'template/js/easing.js'?>" ></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>