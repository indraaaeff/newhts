 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class amodcomplain extends CI_Model{  


 	function get_all()
	{
		$query = $this->db->get('complain');
		return $query->result();
	}

	function get_id_com($id_com) 
	{  
    	$this->db->where('id_com', $id_com);  
    	$this->db->select("*");  
    	$this->db->from("complain");  
   		return $this->db->get();  
	}

	function update_data($data,$id) 
	{  
     	$this->db->where($id);  
     	$this->db->update('complain', $data);  
 	}
}  