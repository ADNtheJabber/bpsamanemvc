<?php

namespace src\model; 

use libs\system\Model;

class ClientMoralRepository extends Model {

    public function add($clientM){

        if ($this->db != null ) 
        {
            $this->db->persist($clientM);
            $this->db->flush();
        } 
    }

    public function liste(){

        if($this->db != null)
		{
			return $this->db->createQuery("SELECT c FROM ClientMoral c")->getResult();
		}
    }

    public function getClient($id){

        if($this->db != null)
		{
            return $this->db->createQuery("SELECT c FROM ClientMoral c WHERE c.id = " . $id)->getSingleResult();
		}
	}
}
?>