<?php

namespace src\model; 

use libs\system\Model;

class ClientPhysiqueRepository extends Model {

    public function add($clientP){
        if($this->db != null)
		{
            $this->db->persist($clientP);
            $this->db->flush();
        }

    }

    public function liste(){
         
        if($this->db != null)
		{
			return $this->db->createQuery("SELECT c FROM ClientPhysique c")->getResult();
		}
    }


    public function getClient($id){
  
        if($this->db != null)
		{
            return $this->db->createQuery("SELECT c FROM ClientPhysique c WHERE c.id = ".$id)->getSingleResult();
		}
	}
}
?>