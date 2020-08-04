<?php

namespace src\model; 

use libs\system\Model;

class CompteRepository extends Model {

    public function add($compte){
        require_once "../../bootstrap.php";

        $entityManager->persist($compte);
        $entityManager->flush();
    }

    public function liste(){
        require_once "../../bootstrap.php";
        
        if($entityManager != null)
		{
			return $entityManager->createQuery("SELECT c FROM Compte c")->getResult();
		}
    }

    public function getCompte($id){
        
        require_once "../../bootstrap.php";
        if($entityManager != null)
		{
            return $entityManager->createQuery("SELECT c FROM Compte c WHERE c.id = " . $id)->getSingleResult();
		}
	}
}
?>