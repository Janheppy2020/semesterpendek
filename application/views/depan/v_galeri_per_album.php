<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galeri</title>
<!-- Stylesheet -->
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
<link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/ddsmoothmenu.css'?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'template/css/jquery.fancybox-1.3.4.css'?>" media="screen" />
<!-- Javascript -->
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
</head>
<body>
<div id="bg">
<!-- Wapper Sec -->
	<div id="wrapper_sec">
		 <!-- masterhead -->
			<!--============================= HEADER =============================-->
			<?php $this->load->view('depan/v_header'); ?>  
            <!--============================= HEADER =============================-->
		<!-- Content Seciton -->
        	<div id="content_section">
           		<!-- News Updates -->
            		
                    <div class="clear"></div>
				<!-- Gallery -->
                	<div class="gallery">
                    	<div class="gallery_top">
                        	<div class="gallery_heading">
                            	<h2>Gallery Photo</h2>
                            </div>
                            <div class="select_gallery">
                            	
                            </div>
                            <div class="clear"></div>
                        </div>
                    	<!-- Col1 -->
                      <?php 
                          $b=$data->row_array();
                      ?>
                        	<div class="categorydiv">
                            	<ul>
                                	  <li><a href="<?php echo base_url().'galeri'?>">Semua</a></li>
                                    <?php 
                                      foreach ($alb->result_array() as $i) {
                                        $alb_id=$i['album_id'];
                                        $alb_nama=$i['album_nama'];
                                        
                                    ?>
                                    <?php if($b['galeri_album_id']==$alb_id):?>
                                      <li><a href="<?php echo base_url().'galeri/album/'.$alb_id;?>" class="selected"><?php echo $alb_nama;?></a></li>
                                    <?php else:?>
                                      <li><a href="<?php echo base_url().'galeri/album/'.$alb_id;?>"><?php echo $alb_nama;?></a></li>
                                    <?php endif;?>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                    		<div class="thumbdiv">
                            	<ul>
                                  <?php
                                    foreach ($data->result_array() as $a) {
                                      $id=$a['galeri_id'];
                                      $judul=$a['galeri_judul'];
                                      $gambar=$a['galeri_gambar'];
                                      
                                  ?>
                                	  <li><a href="<?php echo base_url().'assets/images/'.$gambar?>" rel="galleryimg" class="galleryimg" title="<?php echo $judul;?>" ><img width="108" height="101" src="<?php echo base_url().'assets/images/'.$gambar?>"  alt="" /></a></li>
                                  <?php } ?>
                              </ul>
                            <div class="hdiv">&nbsp;</div>
                            </div>
                            
                    </div>    	
                <div class="clear"></div>
		    </div>	
		<div class="clear"></div>
	</div>
</div>    
<!-- Footer Section -->
<?php $this->load->view('depan/v_footer');?>
</body>
</html>