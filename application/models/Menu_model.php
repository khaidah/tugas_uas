<?php
class Menu_model extends CI_model{
    public function getAllMenu(){
        return $this->db->get('menu')->result_array();
    }
    public function tambahDataMenu(){
        $data = [
            "name" => $this -> input -> post('nama',true),
            "qty" => $this -> input -> post('qty',true),
            "price" => $this -> input -> post('price',true),
        ];
        $this->db->insert('menu',$data);
    }
    public function hapusData($id){
        $this->db->where('id',$id);
        $this->db->Delete('menu');
    }
    public function getMenuById($id){
       return $this->db->get_where('menu',['id'=>$id])->row_array();
    }
    public function ubahdata($id){
        $data = [
            "name" => $this -> input -> post('nama',true),
            "qty" => $this -> input -> post('qty',true),
            "price" => $this -> input -> post('price',true),
        ];
        $this->db->where('id',$id);
        $this->db->update('menu',$data);
    }
    public function cariData(){
        $caridata = $this->input->post('cari',true);
        $this->db->like('name',$caridata);
        $this->db->or_like('price',$caridata);
        return $this->db->get('menu')->result_array();
    }
}
?>