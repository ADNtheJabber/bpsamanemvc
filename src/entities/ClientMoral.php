<?php
use Doctrine\ORM\Annotations as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="clientMoral")
 */
   class ClientMoral {

    /** 
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /** 
     * @Column(type="string") 
     */
    private $nom;

    /** 
     * @Column(type="string") 
     */
    private $raisonSociale;

    /** 
     * @Column(type="string") 
     */
    private $adresse;

    /** 
     * @Column(type="integer") 
     */
    private $tel;

    /** 
     * @Column(type="string") 
     */
    private $email;

    /** 
     * @Column(type="integer") 
     */
    private $ninea;

    /** 
     * @Column(type="string") 
     */
    private $regiscom;

    /**
     * One ClientMoral has many Compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="clientmoral")
     */
    private $Compte;

    function __construct(){

    }

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getRaisonSociale(){
        return $this->raisonSociale;
    }
    
    public function setRaisonSociale($raisonSociale){
        $this->raisonSociale = $raisonSociale;
    }
    
    public function getAdresse(){
        return $this->adresse;
    }
    
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($tel){
        $this->tel = $tel;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getNinea(){
        return $this->ninea;
    }
    
    public function setNinea($ninea){
        $this->ninea = $ninea;
    }

    public function getRegiscom(){
        return $this->regiscom;
    }
    
    public function setRegiscom($regiscom){
        $this->regiscom = $regiscom;
    }

}