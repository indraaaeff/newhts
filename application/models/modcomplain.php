 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class modcomplain extends CI_Model{  
 	function add_complain($data)  
 	{  
 		$this->db->insert('complain',$data);  
 	}

 	function get_comp()
 	{
 		$id=$this->session->userdata('pid');
 		$limit=10;
 		$offset=0;
 		$query = $this->db->get_where('complain', array('pid' => $id));
 		// $query = $this->db->where('name',$id);

 		return $query->result();
 		// $this->db->select("id_com,pid,complain,status");
 		// $this->db->from('complain');
 		// $query = $this->db->get();
 		// return $query->result();
	}

	function get_all()
	{
		$query = $this->db->get('complain');
		return $query->result();

	}

	 function get_id_com($id_com) {  
    	$this->db->where('id_com', $id_com);  
    	$this->db->select("*");  
    	$this->db->from("complain");  
   		return $this->db->get();  
	} 
}  