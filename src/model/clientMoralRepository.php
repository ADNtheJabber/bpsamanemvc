<?php

namespace src\model; 

use libs\system\Model;

class ClientMoralRepository extends Model {

    public function add($clientM){
        require_once "../../bootstrap.php";

        $entityManager->persist($clientM);
        $entityManager->flush();

    }

    public function liste(){
        require_once "../../bootstrap.php";
        
        if($entityManager != null)
		{
			return $entityManager->createQuery("SELECT c FROM ClientMoral c")->getResult();
		}
    }

    public function getClient($id){
        
        require_once "../../bootstrap.php";
        if($entityManager != null)
		{
            return $entityManager->createQuery("SELECT c FROM ClientMoral c WHERE c.id = " . $id)->getSingleResult();
		}
	}
}
?>