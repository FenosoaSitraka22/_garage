<?php
    class Voiture extends CI_Model{

        function getVoitures(){
            $req = $this->db->get('voiture');
            return $req->result_array(); 
        }
        function insertVoiture( $voiture){
            $this->db->insert('voiture',$voiture);
        }
    }