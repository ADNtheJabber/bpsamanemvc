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

    if (isset($_POST) && !empty($_POST)) {

        extract($_POST);
        $data['ok'] = 0;

        $compte = new Compte();
        $compteRepository = new CompteRepository();
            
        $compte->setTypeCompte($_POST['Compte']);
        $compte->setNumCompte($_POST['noCompte']);
        $compte->setFraisOuv($_POST['fraisOuv']);
        $compte->setRemuneration($_POST['remu']);
        $compte->setSolde($_POST['depotCC']);
        $compte->setDateDeblocage($_POST['dateDeblocage']);
            

        $log = $compteRepository->add($compte);

            // var_dump($log);
            
        if ($log) {
            $data['ok'] = $log;

            return $this->view->load("compte/ajout", $data);
        } else {
            return $this->view->load("compte/ajout");
        }
    }
   }

   /** 
     * url pattern for this method
     * localhost/bpsamanemvc/compte/add
     */
    public function findById($id) {
        $comptedb = new CompteRepository;
        
        $data['compte'] = $comptedb->getCompte($id);
        return $this->view->load("compte/listeSingle", $data);
    }

}   