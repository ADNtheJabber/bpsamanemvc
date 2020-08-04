<?php

namespace src\model; 

use libs\system\Model;

class ClientPhysiqueRepository extends Model {

    public function add($clientP){
        require_once "../../bootstrap.php";

        $entityManager->persist($clientP);
        $entityManager->flush();

    }

    public function liste(){
        require_once "../../bootstrap.php";
        
        if($this->db != null)
		{
			return $this->db->createQuery("SELECT c FROM ClientPhysique c")->getResult();
		}
    }


    public function getClient($id){
        
        require_once "../../bootstrap.php";
        if($entityManager != null)
		{
            return $entityManager->createQuery("SELECT c FROM ClientPhysique c WHERE c.id = " . $id)->getSingleResult();
		}
	}
}
?>