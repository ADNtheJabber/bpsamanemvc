<?php
namespace src\model; 

use libs\system\Model;

class CompteRepository extends Model {

    public function add($compte){

        if($this->db != null)
		{
			$this->db->persist($compte);
			$this->db->flush();

			return $compte->getId();
		}
        
    }

    public function liste(){
             
        if($this->db != null)
		{
			return $this->db->createQuery("SELECT c FROM Compte c")->getResult();
		}
    }

    public function getCompte($id){
        
        if($this->db != null)
		{
            return $this->db->createQuery("SELECT c FROM Compte c WHERE c.id = " . $id->getSingleResult());
		}
	}

	public function autosearchEntreprise($search){

		if($this->db != null)
		{
            return $this->db->createQuery("SELECT c FROM ClientMoral c WHERE c.ninea LIKE '%" .$search."%'");
		}
	}

	public function autosearchPhysique($search){

		if($this->db != null)
		{
            return $this->db->createQuery("SELECT c FROM ClientPhysique c WHERE c.cni LIKE '%" .$search."%'");
		}
	}
}
?>