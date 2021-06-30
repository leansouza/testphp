<?php 

class MLivros extends CI_Model {

    protected $Livro_table_name = "livros";

    public function list(){
        $this->db->select();
        $this->db->from('livros');
       $query = $this->db->get();
       return $query->result();
    }

    public function add($data) {
        $this->db->insert($this->Livro_table_name,$data);
        return $this->db->insert_id();
    }

    public function edit($data, $id){
        var_dump($data);
        $this->db->where('id', $id);
        $this->db->update($this->Livro_table_name,$data);
        return true;
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->Livro_table_name);
        return true;
    }

    public function filter_livros_by_id($id){
        $this->db->where('id', $id);
        $this->db->from($this->Livro_table_name);
        $query = $this->db->get();
        return $query->row();
        
    }

}