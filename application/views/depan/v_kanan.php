<div class="col-md-4">
				<div class="panel panel-default">
                    <div class="panel-heading">
						<strong>LATEST NEWS</strong>
					</div>
					<div class="panel-body">
						<div class="media">
							<div class="media-body" align="justify">
								<ul>
                                	<?php 
										$query=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan  ORDER BY tulisan_id DESC limit 6");
                               			foreach ($query->result_array() as $n) {
                                  		$berita_id=$n['tulisan_id'];
                                     	$berita_judul=$n['tulisan_judul'];
                               			$berita_isi=$n['tulisan_isi'];
                                    	$berita_tgl=$n['tanggal'];
                                       	$berita_kategori=$n['tulisan_kategori_nama'];
                                     	$berita_gambar=$n['tulisan_gambar'];
                                     	$berita_author=$n['tulisan_author'];
									?>
                                 	<li>
                                        <div class="thumb">
                                            <a href="<?php echo base_url().'berita/berita_detail/'.$berita_id;?>"><img width="70" height="50" src="<?php echo base_url().'assets/images/'.$berita_gambar;?>"  alt=" " /></a>
                                        </div>
                                        <div class="descripton">
                                            <h6><a href="<?php echo base_url().'berita/berita_detail/'.$berita_id;?>"><?php echo $berita_judul;?></a></h6>
                                            <em><h6>(Tanggal <?php echo $berita_tgl;?> | by <?php echo $berita_author;?>)</h6></em>
                                            <?php echo limit_words($berita_isi,12).'...';?>
                                        </div>
                    				</li>
                           			<?php } ?>
                               	</ul>
                     			<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>			
			</div>	