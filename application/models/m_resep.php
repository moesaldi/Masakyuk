<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_resep extends CI_Model {

	public function getResep()
	{
		$result = $this->db
						->join('kategori', 'kategori.id_kategori=resep.kategori')
						->limit(6)
						->get('resep')->result();
		return $result;
	}
	public function getResepById($id_resep)
    {   
		$result=$this->db
					->join('kategori', 'kategori.id_kategori=resep.kategori')
					->where('id_resep',$id_resep)
					->get('resep')
					->row();
		return $result;
	}
	public function getResepAll()
	{
		$result = $this->db
						->join('kategori', 'kategori.id_kategori=resep.kategori')
						->get('resep')->result();
		return $result;
	}
	public function getResepVegetarian()
	{
		$result = $this->db
						->join('kategori', 'kategori.id_kategori=resep.kategori')
						->limit(6)
						->where('kategori.id_kategori', 1)
						->get('resep')->result();
		return $result;
	}
	public function getResepVegetarianAll()
	{
		$result = $this->db
						->join('kategori', 'kategori.id_kategori=resep.kategori')
						->where('kategori.id_kategori', 1)
						->get('resep')->result();
		return $result;
	}
	public function getResepNonVegetarian()
	{
		$result = $this->db
						->join('kategori', 'kategori.id_kategori=resep.kategori')
						->limit(6)
						->where('kategori.id_kategori', 2)
						->get('resep')->result();
		return $result;
	}
	public function getResepNonVegetarianAll()
	{
		$result = $this->db
						->join('kategori', 'kategori.id_kategori=resep.kategori')
						->where('kategori.id_kategori', 2)
						->get('resep')->result();
		return $result;
	}

}

/* End of file m_resep.php */
/* Location: ./application/models/m_resep.php */