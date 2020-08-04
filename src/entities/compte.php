<?php
use Doctrine\ORM\Annotations as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="compte")
 */
    class Compte {

        /** 
        * @Id
        * @Column(type="integer")
        * @GeneratedValue
        */
        private $id;

        /** 
        * @Column(type="string") 
        */
        private $numCompte;

        /** 
        * @Column(type="string") 
        */
        private $typeCompte;

        /** 
        * @Column(type="decimal") 
        */
        private $fraisOuv;

        /** 
        * @Column(type="decimal") 
        */
        private $remuneration;

        /** 
        * @Column(type="date") 
        */
        private $dateDeblocage;

        /** 
        * @Column(type="decimal") 
        */
        private $solde;

        /**
         * Many compte have one clientPhysique. This is the owning side.
         * @ManyToOne(targetEntity="Compte", inversedBy="clientphysique")
         * @JoinColumn(name="compte_id", referencedColumnName="id")
         */
        private $idClientPhysique;

        /**
         * Many compte have one clientEntreprise. This is the owning side.
         * @ManyToOne(targetEntity="Compte", inversedBy="clientmoral")
         * @JoinColumn(name="compte_id", referencedColumnName="id")
         */
        private $idClientEntreprise;

        function __construct(){

        }

       
        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNumCompte(){
            return $this->numCompte;
        }
        
        public function setNumCompte($numCompte){
            $this->numCompte = $numCompte;
        }
    
        public function getTypeCompte(){
            return $this->typeCompte;
        }
        
        public function setTypeCompte($typeCompte){
            $this->typeCompte = $typeCompte;
        }
    
        public function getFraisOuv(){
            return $this->fraisOuv;
        }
        
        public function setFraisOuv($fraisOuv){
            $this->fraisOuv = $fraisOuv;
        }
    
        public function getRemuneration(){
            return $this->remuneration;
        }
        
        public function setRemuneration($remuneration){
            $this->remuneration = $remuneration;
        }
    
        public function getDateDeblocage(){
            return $this->dateDeblocage;
        }
        
        public function setDateDeblocage($dateDeblocage){
            $this->dateDeblocage = $dateDeblocage;
        }
    
        public function getSolde(){
            return $this->solde;
        }
        
        public function setSolde($solde){
            $this->solde = $solde;
        }

        public function getIdClientPhysique(){
            return $this->idClientPhysique;
        }
        
        public function setIdClientPhysique($idClientPhysique){
            $this->idClientPhysique = $idClientPhysique;
        }
    
        public function getIdClientEntreprise(){
            return $this->idClientEntreprise;
        }
        
        public function setIdClientEntreprise($idClientEntreprise){
            $this->idClientEntreprise = $idClientEntreprise;
        }
    }

?>