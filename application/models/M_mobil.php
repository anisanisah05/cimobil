
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mobil extends CI_Model {

	public function ambilmobil(){
			$ambilmobil = $this->db->join('kategori', 'kategori.kode_kategori = mobil.kode_kategori')->get('mobil')->result();

			return $ambilmobil;
	}


	public function ambilkategori(){

			$ambilkategori = $this->db->get('kategori')->result();

			return $ambilkategori;
	}

	public function tambah($nama_file){

	if($nama_file == ""){

			$tambah = array(
				'nama_barang' => $this->input->post('nama_barang'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'), );

	}else{

		$tambah = array(
				'nama_kategori' => $this->input->post('nama_barang'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'), );

	}
	return $this->db->insert('mobil', $tambah);
	}

public function tampil_ubah_mobil($kode_barang){
		return $this->db->join('kategori', 'kategori.kode_kategori = mobil.kode_kategori')->where('kode_barang',$kode_barang)->get('mobil')->row();

	}



public function update(){
			$ubah = array(
				'nama_barang' => $this->input->post('nama_barang'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'), );

			return $this->db->where('kode_barang',$this->input->post('kode_barang'))->update('mobil', $ubah);

}


public function update_ft($nama_file){
				$ubah = array(
				'nama_barang' => $this->input->post('nama_barang'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'), );

		return $this->db->where('kode_barang',$this->input->post('kode_barang'))->update('mobil', $ubah);





}


public function hapus($kode_barang ){
	return $this->db->where('kode_barang',$kode_barang)->delete('mobil');
}




public function ambilmobilcart($kode_barang){
	return $this->db->where('kode_barang',$kode_barang )->get('mobil')->row();

}

}

/* End of file M_mobil.php */
/* Location: ./application/models/M_mobil.php */

?>
