<?php
use libs\system\Controller;
use src\model\CompteRepository;

class CompteController extends Controller {

    public function __construct() {
       parent::__construct();
    }

     /** 
     * use: localhost/bpsamanemvc/Compte/
     */
    public function index(){

        return $this->view->load("compte/ajout");
    }

     /** 
     * url pattern for this method
     * localhost/bpsamanemvc/compte/add
     */

    public function add() {
    
        if (isset($_POST['valider'])) {
        
        extract($_POST);
        $data['ok'] = 0;

        if (!empty($_POST)) {

            $compte = new Compte();
            $compteRepository = new CompteRepository();

            if ($_POST['typeCompte']==1) {
                $compte->setTypeCompte('Courant');
            } 
            else if ($_POST['typeCompte']==2) {
                $compte->setTypeCompte('Epargne');
            } 
            else if ($_POST['typeCompte']==3) {
                $compte->setTypeCompte('Bloque');
            }
            
        //$compte->setTypeCompte($_POST['typeCompte']);
        $compte->setNumCompte($_POST['numeroCompte']);
        $compte->setFraisOuv($_POST['fraisOuverture']);
        $compte->setRemuneration($_POST['remuneration']);
        $compte->setSolde($_POST['depotInitial']);
        $compte->setAgios($_POST['agios']);
        $compte->setDateOuverture($_POST['dateOuverture']);
        $compte->setDateDeblocage($_POST['dateDeblocage']);
        $compte->setIdClientEntreprise(NULL);
        $compte->setIdClientPhysique(NULL);
            
        //var_dump($compte)
        $data['ok'] = $compteRepository->add($compte);
        }
        return $this->view->load("compte/ajout", $data);
    }
    else {
            return $this->view->load("compte/ajout");
        }
    }

    /** 
     * url pattern for this method
     * localhost/bpsamanemvc/Compte/liste
     */
    public function liste(){
        $comptedb = new CompteRepository;
        
        $data['comptes'] = $comptedb->liste();
        return $this->view->load("compte/liste", $data);
    }

    /** 
     * url pattern for this method
     * localhost/bpsamanemvc/Compte/liste
     */
    public function details(){
        $comptedb = new CompteRepository;
        
        $data['comptes'] = $comptedb->liste();
        return $this->view->load("compte/details", $data);
    }


   /** 
     * url pattern for this method
     * localhost/bpsamanemvc/compte/add
     */
    public function findById($id) {
        $comptedb = new CompteRepository;
        
        $data['comptes'] = $comptedb->getCompte($id);
        return $this->view->load("compte/details", $data);
    }

    /** 
     * url pattern for this method
     * localhost/bpsamanemvc/compte
     */
    public function searchEntreprise($id) {
        $comptedb = new CompteRepository;
        
        $data['results'] = $comptedb->autosearchEntreprise($_POST["searchEntreprise"]);
        if (!empty($data)) {
            
        }
        else{
            $message = "client moral introuvable, essayer de chercher parmi les clients physiques !";
            return $this->view->load("compte/ajout", $message);
        }
        //return $this->view->load("compte/details", $data);
    }

}   