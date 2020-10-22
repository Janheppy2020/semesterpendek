<?php
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_kelas');
		$this->load->model('m_jurusan');
		$this->load->library('upload');
	}


	function index(){
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$x['jur']=$this->m_jurusan->get_all_jurusan();
		$x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('admin/v_siswa',$x);
	}
	
	function simpan_siswa(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nim=strip_tags($this->input->post('xnim'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$kelas=strip_tags($this->input->post('xkelas'));
							$jurusan=strip_tags($this->input->post('xjurusan'));
							$notelp=strip_tags($this->input->post('xnotelp'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$password=strip_tags($this->input->post('xpassword'));

							$this->m_siswa->simpan_siswa($nim,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$kelas,$jurusan,$notelp,$alamat,$password,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/siswa');
							}else{
								echo $this->session->set_flashdata('msg','warning');
								redirect('admin/siswa');
							}
							 
							}else{
	            			$nim=strip_tags($this->input->post('xnim'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$kelas=strip_tags($this->input->post('xkelas'));
							$jurusan=strip_tags($this->input->post('xjurusan'));
							$notelp=strip_tags($this->input->post('xnotelp'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$password=strip_tags($this->input->post('xpassword'));

					$this->m_siswa->simpan_siswa_tanpa_img($nim,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$kelas,$jurusan,$notelp,$alamat,$password);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/siswa');
				}
				
	}
	
	function update_siswa(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$nim=strip_tags($this->input->post('xnim'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$kelas=strip_tags($this->input->post('xkelas'));
							$jurusan=strip_tags($this->input->post('xjurusan'));
							$notelp=strip_tags($this->input->post('xnotelp'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$password=strip_tags($this->input->post('xpassword'));

							$this->m_siswa->update_siswa($kode,$nim,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$kelas,$jurusan,$notelp,$alamat,$password,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/siswa');
	                    
							}else{
								echo $this->session->set_flashdata('msg','warning');
								redirect('admin/siswa');
							}
							
							}else{
							$kode=$this->input->post('kode');
							$nim=strip_tags($this->input->post('xnim'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$kelas=strip_tags($this->input->post('xkelas'));
							$jurusan=strip_tags($this->input->post('xjurusan'));
							$notelp=strip_tags($this->input->post('xnotelp'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$password=strip_tags($this->input->post('xpassword'));

							$this->m_siswa->update_siswa_tanpa_img($kode,$nim,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$kelas,$jurusan,$notelp,$alamat,$password);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/siswa');
	            } 

	}

	function hapus_siswa(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_siswa->hapus_siswa($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/siswa');
	}

}