 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saint extends CI_Model {

	public function simpan_provinsi()
	{
		$data = array(
			'provinsi_nama' =>$this->input->post('nama_provinsi'),
			 );
		$this->db->insert('provinsi',$data);
	}
	public function tampil_provinsi()
	{
		$data=array();
		$this->db->select('*');
		$this->db->order_by('provinsi_id','DESC');
		$view=$this->db->get('provinsi');
		foreach ($view->result_array() as $row) {
				$data[]=$row;
			}
		$view->free_result();
		return $data;
	}
	public function ambil_provinsi($id_provinsi){
		$data=array();
		$this->db->select('*');
		$this->db->where('provinsi_id',$id_provinsi);
		$view=$this->db->get('provinsi');
				$data=$view->row_array();
		$view->free_result();
		return $data;
	}
	public function update_provinsi()
	{
		$data = array(
			'provinsi_nama' =>$this->input->post('nama_provinsi'),
			 );
		$this->db->where('provinsi_id',$this->input->post('provinsi_id'));
		$this->db->update('provinsi',$data);
	}
	public function hapus_provinsi($id_provinsi)
	{
		$this->db->where('provinsi_id',$id_provinsi);
		$this->db->delete('provinsi');
	}
	public function simpan_kabupaten()
	{
		$data = array(
			'kabupaten_nama' =>$this->input->post('nama_kabupaten'),
			'provinsi_id' =>$this->input->post('id_provinsi'),
			'penduduk' =>$this->input->post('jml'),
			 );
		$this->db->insert('kabupaten',$data);
	}
	public function tampil_kabupaten()
	{
		$data=array();
		$this->db->select('*');
		$this->db->join('provinsi','provinsi.provinsi_id=kabupaten.provinsi_id');
		$this->db->order_by('kabupaten_id','DESC');
		$view=$this->db->get('kabupaten');
		foreach ($view->result_array() as $row) {
				$data[]=$row;
			}
		$view->free_result();
		return $data;
	}
	public function filter_kabupaten_prov($id_prov)
	{
		$data=array();
		$this->db->select('*');
		$this->db->join('provinsi','provinsi.provinsi_id=kabupaten.provinsi_id');
		$this->db->where('kabupaten.provinsi_id',$id_prov);
		$this->db->order_by('kabupaten_id','DESC');
		$view=$this->db->get('kabupaten');
		foreach ($view->result_array() as $row) {
				$data[]=$row;
			}
		$view->free_result();
		return $data;
	}
	public function filter_kabupaten_nama($nama)
	{
		$data=array();
		$this->db->select('*');
		$this->db->join('provinsi','provinsi.provinsi_id=kabupaten.provinsi_id');
		$this->db->like('provinsi_nama',$nama);
		$this->db->or_like('kabupaten_nama',$nama);
		$this->db->order_by('kabupaten_id','DESC');
		$view=$this->db->get('kabupaten');
		foreach ($view->result_array() as $row) {
				$data[]=$row;
			}
		$view->free_result();
		return $data;
	}
	public function ambil_kabupaten($id_kabupaten){
		$data=array();
		$this->db->select('*');
		$this->db->where('kabupaten_id',$id_kabupaten);
		$view=$this->db->get('kabupaten');
				$data=$view->row_array();
		$view->free_result();
		return $data;
	}
	public function update_kabupaten()
	{
		$data = array(
			'kabupaten_nama' =>$this->input->post('nama_kabupaten'),
			'provinsi_id' =>$this->input->post('id_provinsi'),
			'penduduk' =>$this->input->post('jml'),
			 );
		$this->db->where('kabupaten_id',$this->input->post('id_kabupaten'));
		$this->db->update('kabupaten',$data);
	}
	public function hapus_kabupaten($id_kabupaten)
	{
		$this->db->where('kabupaten_id',$id_kabupaten);
		$this->db->delete('kabupaten');
	}
	public function tampil_lap_provinsi()
	{
		$data=array();
		$this->db->select('sum(penduduk) as jumlah');
		$this->db->select('provinsi_nama');
		$this->db->select('provinsi.provinsi_id');
		$this->db->join('kabupaten','kabupaten.provinsi_id=provinsi.provinsi_id','left');
		$this->db->group_by('provinsi.provinsi_id');
		$view=$this->db->get('provinsi');
		foreach ($view->result_array() as $row) {
				$data[]=$row;
			}
		$view->free_result();
		return $data;
	}
	public function tampil_lap_prov($id)
	{
		$data=array();
		$this->db->select('sum(penduduk) as jumlah');
		$this->db->select('provinsi_nama');
		$this->db->where('provinsi.provinsi_id', $id);
		$this->db->join('provinsi','provinsi.provinsi_id=kabupaten.provinsi_id');
		$this->db->group_by('provinsi.provinsi_id');
		$view=$this->db->get('kabupaten');
		$kab=tampil_lap_kab($id);
		foreach ($view->result_array() as $row) {
				$data[]=$row;
				foreach ($kab as $val) {
					$data[][]=$val;
				}
			}
		$view->free_result();
		return $data;
	}
	public function tampil_lap_kab($id)
	{
		$data=array();
		$this->db->select('*');
		$this->db->where('kabupaten.provinsi_id', $id);
		$view=$this->db->get('kabupaten');
		foreach ($view->result_array() as $row) {
				$data[]=$row;
			}
		$view->free_result();
		return $data;
	}
}