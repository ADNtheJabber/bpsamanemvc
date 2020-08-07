<?php
use Doctrine\ORM\Annotations as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="clientPhysique")
 */
class ClientPhysique {

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
    private $prenom;

    /** 
     * @Column(type="integer") 
     */
    private $tel;

    /** 
     * @Column(type="string") 
     */
    private $adresse;

    /** 
     * @Column(type="string") 
     */
    private $email;

    /** 
     * @Column(type="integer") 
     */
    private $identifiant;

    /** 
     * @Column(type="integer") 
     */
    private $salaire;

    /** 
     * @Column(type="string") 
     */
    private $profession;

    /** 
     * @Column(type="string") 
     */
    private $infosEmp;

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

    public function getPrenom(){
        return $this->prenom;
    }
    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($tel){
        $this->tel = $tel;
    }

    public function getAdresse(){
        return $this->adresse;
    }
    
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getIdentifiant(){
        return $this->identifiant;
    }
    
    public function setIdentifiant($identifiant){
        $this->identifiant = $identifiant;
    }

    public function getSalaire(){
        return $this->salaire;
    }
    
    public function setSalaire($salaire){
        $this->salaire = $salaire;
    }

    public function getProfession(){
        return $this->profession;
    }
    
    public function setProfession($profession){
        $this->profession = $profession;
    }

    public function getInfosEmp(){
        return $this->infosEmp;
    }
    
    public function setInfosEmp($infosEmp){
        $this->infosEmp = $infosEmp;
    }
}

?>