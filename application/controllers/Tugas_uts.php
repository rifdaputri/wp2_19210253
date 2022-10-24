<?php 
class Tugas_uts extends CI_Controller 
{ 
	public function index() 
	
	{
		
		$this->load->view('Tugas_uts/view-form'); 
	} 
	
	public function cetak() 
	{ 
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
		'required' => 'Nama Siswa Harus diisi', 'min_lenght' => 'Nama terlalu pendek' ]); 
		$this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [ 
		'required' => 'NIS Harus diisi', 'min_lenght' => 'NIS terlalu pendek' ]);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
		'required' => 'Kelas Harus Diisi', 'min_lenght' => 'Kelas terlalu pendek' ]); 
		$this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required|min_length[3]', [
		'required' => 'Tanggal Lahir Harus Diisi', 'min_lenght' => 'Tanggal Lahir terlalu pendek' ]); 
		$this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|min_length[3]', [
		'required' => 'Tempat Lahir Harus Diisi', 'min_lenght' => 'Tempat Lahir terlalu pendek' ]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
		'required' => 'Alamat Harus Diisi', 'min_lenght' => 'Alamat terlalu pendek' ]); 
		$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required|min_length[1]', [
		'required' => 'Jenis Kelamin Harus Dipilih', 'min_lenght' => 'Jenis Kelas harus dipilih' ]); 
		$this->form_validation->set_rules('agama', 'Agama', 'required|min_length[1]', [
		'required' => 'Agama Harus Dipilih', 'min_lenght' => 'Agama harus dipilih' ]);
		
		if ($this->form_validation->run() != true) {
			$this->load->view('Tugas_uts/view-form'); 
		} else {
			
			$data = [ 
				'nama' => $this->input->post('nama'), 
				'nis' => $this->input->post('nis'), 
				'kelas' => $this->input->post('kelas'),
				'tanggallahir' => $this->input->post('tanggallahir'),
				'tempatlahir' => $this->input->post('tempatlahir'),
				'alamat' => $this->input->post('alamat'),
				'jeniskelamin' => $this->input->post('jeniskelamin'),
				'agama' => $this->input->post('agama')
		]; 
		$this->load->view('Tugas_uts/view-data', $data);
		}
	}
	
}
