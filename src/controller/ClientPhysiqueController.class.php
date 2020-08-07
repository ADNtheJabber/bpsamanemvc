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
        
        $data['clientsP'] = $clientPdb->liste();
        return $this->view->load("clientPhysique/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/bpsamanemvc/clientPhysique/add
     */

    public function add() {

        if (isset($_POST['valider'])) {
            
            extract($_POST);
            $data['ok'] = 0;
    
            if (!empty($_POST)) {

                $clientP = new ClientPhysique();
                $clientPhysiqueRepository = new ClientPhysiqueRepository();
                    
                $clientP->setNom($_POST['nom']);
                $clientP->setPrenom($_POST['prenom']);
                $clientP->setAdresse($_POST['adresse']);
                $clientP->setTel($_POST['tel']);
                $clientP->setEmail($_POST['email']);
                $clientP->setIdentifiant($_POST['identifiant']);
                $clientP->setSalaire($_POST['salaire'] !='' ? $_POST['salaire'] : 0);
                $clientP->setProfession($_POST['profession']);
                $clientP->setInfosEmp($_POST['info_employeur']);
                    

                $data['ok'] = $clientPhysiqueRepository->add($clientP);
            }
            return $this->view->load("clientPhysique/ajout", $data);
        }
        else {
                return $this->view->load("clientPhysique/ajout");
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