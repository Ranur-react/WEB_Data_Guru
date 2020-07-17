<?php 

  $usr= $this->session->userdata('kode');
  $qry=$this->db->get_where('tb_user', ['username' => $usr])->row_array();



if ($qry['hakakses']=='admin') {
  # code...

  include 'admin.php';
}else{
  include 'pemimpin.php';

}
