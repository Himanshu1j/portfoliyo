<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class add extends CI_Model{
    public function add_datas($data){
  
    $post['name'] =    $data['name'];
    $post['email'] =   $data['email'];
    $post['phone'] =   $data['phone'];
    $post['address'] = $data['address'];
    
  
$this->db->insert('portfoliyo',$post);
}
}