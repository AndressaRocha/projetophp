<?php
require_once APPPATH."models/PostModel.php";   
    class FeedModel extends CI_Model{ //post
        
    public function getmostrar(){
	     return $this->db->order_by('id', 'desc')->get_where('post')->result();
	}
	public function getPesquisa(){
	    return $this->db->get_where('post', $this->input->post('*$disciplina*'));
	}
    public function getClassName(){
		return "Feed";
    }
}