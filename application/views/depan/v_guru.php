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
	<!-- banner -->
	<div class="inner_page_agile"></div>
	<!--//banner -->
	<!-- short -->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="<?php echo base_url().''?>"><span class="fa fa-home icon"></span> Home</a>
					<span>| |</span>
				</li>
				<li>Dosen STMIK IBBI Medan</li>&nbsp; &nbsp;
                <li>|| &nbsp; &nbsp;<a href="<?php echo site_url('dossen');?>" class="btn btn-primary"><b><font color="#FFFFFF">Log In Here</font></b></a></li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- about -->
	<div class="about-sec" id="about">
		<div class="container">
            <div class="gallery">
                <div class="container">
                    <div class="title-div">
                        <h3 class="tittle">
                            <span>D</span>osen <span>S</span>TMIK <span>I</span>BBI Medan
                        </h3>
                        <div class="tittle-style">
        
                        </div>
                    </div>
                    <div class="agileinfo-gallery-row">
                        <?php
							$no=0;
							foreach ($data->result_array() as $i) :
							$no++;
							$id=$i['dosen_id'];
							$nip=$i['dosen_nidn'];
							$nama=$i['dosen_nama'];
							$jenkel=$i['dosen_jenkel'];
							$tmp_lahir=$i['dosen_tmp_lahir'];
							$tgl_lahir=$i['dosen_tgl_lahir'];
							
							$photo=$i['dosen_photo'];
                        ?>
                        <div class="col-xs-2 w3gallery-grids">
                            <a href="#" class="imghvr-hinge-right figure">
                                <?php if(empty($photo)):?>
                                    <img width="160" height="170" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" />
                                <?php else:?>
                                    <img width="160" height="170" src="<?php echo base_url().'assets/images/'.$photo;?>"  alt="" />
                                <?php endif;?>
                                <div class="agile-figcaption">
                                    <h5><?php echo $nama;?></h5>
                                </div>
                            </a>
                        </div>
                        <?php endforeach;?>
                        <div class="clearfix"> </div>
                        	<div class="pginaiton pad9" align="center">
                     				<ul>
										<li class="pagination pagination-sm"><?php echo $page;?></li>
                                    </ul
                   			></div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!-- //about -->
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