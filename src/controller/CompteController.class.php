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
     * localhost/bpsamanemvc/Compte/liste
     */
    public function liste(){
        $comptedb = new CompteRepository;
        
        $data['comptes'] = $comptedb->liste();
        return $this->view->load("compte/liste", $data);
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
         
        $compte->setTypeCompte($_POST['typeCompte']);
        $compte->setNumCompte($_POST['numeroCompte']);
        $compte->setFraisOuv($_POST['fraisOuverture']);
        $compte->setRemuneration($_POST['remuneration']);
        $compte->setSolde($_POST['depotInitial']);
        $compte->setAgios($_POST['agios']);
        $compte->setDateOuverture($_POST['dateOuverture']);
        $compte->setDateDeblocage($_POST['dateDeblocage']);
        $compte->setIdClientEntreprise(NULL);
        $compte->setIdClientPhysique(NULL);
            
        var_dump($compte);

        $log = $compteRepository->add($compte);

        var_dump($log);
        $data['ok'] = $log;
        }
        return $this->view->load("compte/ajout", $data);
    }
    else {
            return $this->view->load("compte/ajout");
        }
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

}   