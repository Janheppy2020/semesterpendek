<div class="rtab">
                                	<div class="tab_navigation">
                                    	<ul>
                                        	<li class="active" ><a   href="#rtab1">Mahasiswa</a></li>
                                        	<li><a href="#rtab2">Dosen/Staff</a> </li>
                                        </ul>
                                    </div>
                                    <div class="rtab_content" id="rtab1" style="display:none;">
                                    	<ul>
                                          <?php 
                                            $data_siswa=$this->db->query("SELECT * FROM tbl_mahasiswa ORDER BY mahasiswa_id DESC LIMIT 4");
                                            foreach ($data_siswa->result_array() as $i) :
                                                $mahasiswa_nim=$i['mahasiswa_nim'];
                                                $mahasiswa_nama=$i['mahasiswa_nama'];
                                                $mahasiswa_photo=$i['mahasiswa_photo'];
                                          ?>
                                          <li>
                                            <?php if(empty($mahasiswa_photo)):?>
                                              <div class="thumb" ><a href="#"><img width="40" height="40" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" /></a></div> 
                                            <?php else:?>
                                              <div class="thumb" ><a href="#"><img width="40" height="40" src="<?php echo base_url().'assets/images/'.$mahasiswa_photo;?>"  alt="" /></a></div> 
                                            <?php endif;?>
                                                <div class="description">
                                                  <h6><a href="#"><?php echo $mahasiswa_nama;?></a></h6>
                                                    <p><a href="#" class="gray" ><?php echo $mahasiswa_nim;?></a></p>
                                                </div> 
                                           </li>
                                         <?php endforeach;?>
                                        
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="rtab_content" id="rtab2" style="display:none;">
                                    	<ul>
                                          <?php 
                                            $data_siswa=$this->db->query("SELECT * FROM tbl_dosen,tbl_makul where tbl_dosen.makul_id=tbl_makul.makul_id LIMIT 4");
                                            foreach ($data_siswa->result_array() as $i) :
                                                $nip=$i['dosen_nidn'];
                                                $nama=$i['dosen_nama'];
                                                $mapel=$i['makul_nama'];
                                                $photo=$i['dosen_photo'];
                                          ?>
                                          <li>
                                            <?php if(empty($mahasiswa_photo)):?>
                                              <div class="thumb" ><a href="#"><img width="40" height="40" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" /></a></div> 
                                            <?php else:?>
                                              <div class="thumb" ><a href="#"><img width="40" height="40" src="<?php echo base_url().'assets/images/'.$photo;?>"  alt="" /></a></div> 
                                            <?php endif;?>
                                                <div class="description">
                                                  <h6><a href="#"><?php echo $nama;?></a></h6>
                                                    <p><a href="#" class="gray" ><?php echo $mapel;?></a></p>
                                                </div> 
                                           </li>
                                         <?php endforeach;?>
                                        
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                    
                                </div>