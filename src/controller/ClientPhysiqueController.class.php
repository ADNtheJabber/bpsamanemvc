<?php
use libs\system\Controller;
use src\model\ClientPhysiqueRepository;

class clientPhysiqueController extends Controller {

    public function __construct() {
       parent::__construct();
    }

     /** 
     * use: localhost/bpsamanemvc/ClientPhysique/
     */
    public function index(){

        return $this->view->load("clientPhysique/ajout");
    }

    /** 
     * url pattern for this method
     * localhost/bpsamanemvc/ClientPhysique/liste
     */
    public function liste(){
        $clientPdb = new ClientPhysiqueRepository;
        
        $data['clients'] = $clientPdb->liste();
        return $this->view->load("clientPhysique/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/bpsamanemvc/clientPhysique/add
     */

    public function add() {

    if (isset($_POST) && !empty($_POST)) {

        extract($_POST);
        $data['ok'] = 0;

        $clientP = new ClientPhysique();
        $clientPhysiqueRepository = new ClientPhysiqueRepository();
            
        $clientP->setNom($_POST['nomPhysique']);
        $clientP->setPrenom($_POST['prenomPhysique']);
        $clientP->setAdresse($_POST['adressePhysique']);
        $clientP->setTel($_POST['telPhysique']);
        $clientP->setEmail($_POST['emailPhysique']);
        $clientP->setIdentifiant($_POST['cni']);
        $clientP->setSalaire($_POST['salaire'] !='' ? $_POST['salaire'] : 0);
        $clientP->setProfession($_POST['profession']);
        $clientP->setInfosEmp($_POST['infos_emp']);
            

        $log = $clientPhysiqueRepository->add($clientP);

            // var_dump($log);
            
        if ($log) {
            $data['ok'] = $log;

            return $this->view->load("clientPhysique/ajout", $data);
        } else {
            return $this->view->load("clientPhysique/ajout");
        }
    }
   }
   /** 
     * url pattern for this method
     * localhost/bpsamanemvc/clientPhysique
     */
    public function findById($id) {
        $clientdb = new ClientPhysiqueRepository;
        
        $data['client'] = $clientdb->getClient($id);
        return $this->view->load("compte/listeSingle", $data);
    }
}   