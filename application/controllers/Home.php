<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['judul']='Data-Penduduk';
		$data['header']='layout/header';
		$data['footer']='layout/footer';
		$data['modal']='layout/modal';
		$data['isi']='isi/home';
		$data['page']='home';
		$data['provinsi']=$this->saint->tampil_provinsi();
		$this->load->view('layout/template',$data);
	}

	public function provinsi()
	{
		$data['judul']='Data-Penduduk';
		$data['header']='layout/header';
		$data['footer']='layout/footer';
		$data['modal']='layout/modal';
		$data['isi']='isi/input_provinsi';
		$data['page']='home';
		$data['provinsi']=$this->saint->tampil_provinsi();
		$this->load->view('layout/template',$data);
	}
		public function simpan_provinsi()
	{
		$this->saint->simpan_provinsi();
		redirect('home/provinsi');
	}
	public function lihat_detail($id_provinsi){
		$data['judul']='Update provinsi';
		$data['header']='layout/header';
		$data['footer']='layout/footer';
		$data['modal']='layout/modal';
		$data['isi']='isi/update_provinsi';
		$data['provinsi']=$this->saint->ambil_provinsi($id_provinsi);
		$this->load->view('layout/template',$data);
	}
	public function update_provinsi()
	{
		$this->saint->update_provinsi();
		redirect('home/provinsi');
	}
	public function hapus_provinsi($id_provinsi)
	{
		$this->saint->hapus_provinsi($id_provinsi);
		redirect('home/provinsi');
	}
		public function kabupaten()
	{
		$data['judul']='Kabupaten';
		$data['header']='layout/header';
		$data['footer']='layout/footer';
		$data['modal']='layout/modal';
		$data['isi']='isi/input_kabupaten';
		$data['provinsi']=$this->saint->tampil_provinsi();
		if (!empty($_POST['search_nama'])) {
			$data['kabupaten']=$this->saint->filter_kabupaten_nama($_POST['search_nama']);
		}else if(!empty($_POST['search_prov'])){
			$data['kabupaten']=$this->saint->filter_kabupaten_prov($_POST['search_prov']);
		}else{
			$data['kabupaten']=$this->saint->tampil_kabupaten();
		}
		$this->load->view('layout/template',$data);
	}
	public function simpan_kabupaten()
	{
		$this->saint->simpan_kabupaten();
		redirect('home/kabupaten');
	}
	public function lihat_kabupaten($id_kabupaten){
		$data['judul']='Update Kabupaten';
		$data['header']='layout/header';
		$data['footer']='layout/footer';
		$data['modal']='layout/modal';
		$data['isi']='isi/update_kabupaten';
		$data['provinsi']=$this->saint->tampil_provinsi();
		$data['kabupaten']=$this->saint->ambil_kabupaten($id_kabupaten);
		$this->load->view('layout/template',$data);
	}
	public function update_kabupaten()
	{
		$this->saint->update_kabupaten();
		redirect('home/kabupaten');
	}
	public function hapus_kabupaten($id_kabupaten)
	{
		$this->saint->hapus_kabupaten($id_kabupaten);
		redirect('home/kabupaten');
	}
	public function laporan_prov(){

		$data['provinsi']=$this->saint->tampil_lap_provinsi();
		$this->load->view('isi/laporan_provinsi',$data);
	}
	public function laporan_kab(){

		$data['provinsi']=$this->saint->tampil_lap_provinsi();
		if (!empty($_POST['id'])) {
			$data['provinsi']=$this->saint->tampil_lap_pro($_POST['id']);
		}
		$this->load->view('isi/laporan_kabupaten',$data);
	}
}
