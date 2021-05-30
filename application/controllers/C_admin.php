<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_admin');
		$this->load->model('M_login');
	}
	public function index()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/das/dashboard');
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	//data

	public function informasi_client()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/in_client',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	public function penawaran()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_penawaran()->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/penawaran',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

public function jasa()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_jasa()->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/jasa',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

public function v_order()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_v_order()->result();
		$data['user2'] = $this->M_admin->tampil_data_client()->result();
		$data['user3'] = $this->M_admin->tampil_data_vo();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/data/v_order',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	//simpan

	function simpan_client(){

		if($this->M_login->logged_id2() == 'admin')
	{

		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$verifikasi_client = $this->input->post('verifikasi_client');
		$password = $this->input->post('password');

		$data = array(
			
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'email' => $email,
			'verifikasi_client' => $verifikasi_client,
			'password' => $password
			);
		$this->M_admin->input_data_client($data,'client');
		redirect('C_admin/informasi_client');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_penawaran(){

		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_penawaran = $this->input->post('id_penawaran');
		$id_client = $this->input->post('id_client');
		$tanggal = $this->input->post('tanggal');
		$keterangan= $this->input->post('keterangan');
		$qty = $this->input->post('qty');
		$unit = $this->input->post('unit');
		$biaya = $this->input->post('biaya');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			
			//'id_penawaran' => $id_penawaran,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan,
			'qty' => $qty,
			'unit' => $unit,
			'biaya' => $biaya,
			'jumlah' => $jumlah
			);
		$this->M_admin->input_data_penawaran($data,'penawaran');
		redirect('C_admin/penawaran');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_jasa(){

		if($this->M_login->logged_id2() == 'admin')
	{

		//$id_jasa = $this->input->post('id_jasa');
		$layanan_jasa = $this->input->post('layanan_jasa');
		$harga = $this->input->post('harga');


		$data = array(
			
			//'id_jasa' => $id_jasa,
			'layanan_jasa' => $layanan_jasa,
			'harga' => $harga
			);
		$this->M_admin->input_data_jasa($data,'jasa');
		redirect('C_admin/jasa');
	}
	else
	{
		redirect("C_login");

	}

		
	}

function simpan_v_order(){

		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_order = $this->input->post('id_order');
		$id_client = $this->input->post('id_client');
		$tanggal = $this->input->post('tanggal');
		$email = $this->input->post('email');
		$status_verifikasi = $this->input->post('status_verifikasi');
		$status_pekerjaan = $this->input->post('status_pekerjaan');


		$data = array(
			
			//'id_order' => $id_order,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'email' => $email,
			'status_verifikasi' => $status_verifikasi,
			'status_pekerjaan' => $status_pekerjaan
			);
		$this->M_admin->input_data_jasa($data,'v_order');
		redirect('C_admin/v_order');
	}
	else
	{
		redirect("C_login");

	}

		
	}
	//delete client

	function hapus_client($id_client){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_client' => $id_client);
	$this->M_admin->hapus_data_client($where,'client');
	redirect('C_admin/informasi_client');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function hapus_penawaran($id_penawaran){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_penawaran' => $id_penawaran);
	$this->M_admin->hapus_data_penawaran($where,'penawaran');
	redirect('C_admin/penawaran');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function hapus_jasa($id_jasa){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_jasa' => $id_jasa);
	$this->M_admin->hapus_data_jasa($where,'jasa');
	redirect('C_admin/jasa');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function hapus_v_order($id_order){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_order' => $id_order);
	$this->M_admin->hapus_data_v_order($where,'v_order');
	redirect('C_admin/v_order');
	}
	else
	{
		redirect("C_login");

	}
	
	}

	//edit

	function edit_client($id_client){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_client' => $id_client);
		$data['user'] = $this->M_admin->edit_data_client($where,'client')->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_in_client',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}


		function edit_jasa($id_jasa){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_jasa' => $id_jasa);
		$data['user'] = $this->M_admin->edit_data_jasa($where,'jasa')->result();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_jasa',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

function edit_penawaran($id_penawaran){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_penawaran' => $id_penawaran);
		$data['user'] = $this->M_admin->edit_data_penawaran($where,'penawaran')->result();
		$data['user2'] = $this->M_admin->tampil_data_cl();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_penawaran',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}


function edit_v_order($id_order){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_order' => $id_order);
		$data['user'] = $this->M_admin->edit_data_penawaran($where,'v_order')->result();
		$data['user2'] = $this->M_admin->tampil_data_vo();
		$this->load->view('admin/admin/inc/head');
		$this->load->view('admin/admin/inc/sidebar');
		$this->load->view('admin/admin/edit/e_v_order',$data);
		$this->load->view('admin/admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}
	//simpan edit

	function update_data_client(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_client = $this->input->post('id_client');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$verifikasi_client = $this->input->post('verifikasi_client');
		$password = $this->input->post('password');


		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_telp' => $no_telp,
			'email' => $email,
			'verifikasi_client' => $verifikasi_client,
			'password' => $password
			);

	$where = array(
		'id_client' => $id_client
	);

	$this->M_admin->update_data_client($where,$data,'client');
		redirect('C_admin/informasi_client');
	}

	else
	{
		redirect("C_login");

	}
}

			
			//simpan edit

	function update_data_penawaran(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_penawaran = $this->input->post('id_penawaran');
		$id_client = $this->input->post('id_client');
		$tanggal = $this->input->post('tanggal');
		$keterangan= $this->input->post('keterangan');
		$qty = $this->input->post('qty');
		$unit = $this->input->post('unit');
		$biaya = $this->input->post('biaya');
		$jumlah = $this->input->post('jumlah');



		$data = array(
			//'id_penawaran' => $id_penawaran,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan,
			'qty' => $qty,
			'unit' => $unit,
			'biaya' => $biaya,
			'jumlah' => $jumlah
			);

	$where = array(
		'id_penawaran' => $id_penawaran
	);

	$this->M_admin->update_data_penawaran($where,$data,'penawaran');
		redirect('C_admin/penawaran');
	}

	else
	{
		redirect("C_login");

	}
}

	
	function update_data_jasa(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_jasa = $this->input->post('id_jasa');
		$layanan_jasa = $this->input->post('layanan_jasa');
		$harga = $this->input->post('harga');



		$data = array(
			//'id_jasa' => $id_jasa,
			'layanan_jasa' => $layanan_jasa,
			'harga' => $harga
			);

	$where = array(
		'id_jasa' => $id_jasa
	);

	$this->M_admin->update_data_jasa($where,$data,'jasa');
		redirect('C_admin/jasa');
	}

	else
	{
		redirect("C_login");

	}
}



	function update_data_v_order(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_order = $this->input->post('id_order');
		$id_client = $this->input->post('id_client');
		$tanggal = $this->input->post('tanggal');
		$email = $this->input->post('email');
		$status_verifikasi = $this->input->post('status_verifikasi');
		$status_pekerjaan = $this->input->post('status_pekerjaan');



		$data = array(
			//'id_order' => $id_order,
			'id_client' => $id_client,
			'tanggal' => $tanggal,
			'email' => $email,
			'status_verifikasi' => $status_verifikasi,
			'status_pekerjaan' => $status_pekerjaan
			);

	$where = array(
		'id_order' => $id_order
	);

	$this->M_admin->update_data_jasa($where,$data,'v_order');
		redirect('C_admin/v_order');
	}

	else
	{
		redirect("C_login");

	}
}



}