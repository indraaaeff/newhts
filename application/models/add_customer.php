 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class add_customer extends CI_Model{  
         function register($data)  
         {  
                 $this->db->insert('customer',$data);  
         }  
 }  