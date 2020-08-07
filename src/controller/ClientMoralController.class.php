<?php
use src\model\ClientMoralRepository;
use libs\system\Controller;


class clientMoralController extends Controller {

    public function __construct() {
       parent::__construct();
    }

     /** 
     * use: localhost/bpsamanemvc/ClientMoral/
     */
    public function index(){

        return $this->view->load("clientMoral/ajout");
    }

    /** 
     * url pattern for this method
     * localhost/bpsamanemvc/ClientMoral/liste
     */
    public function liste(){
        $clientMdb = new clientMoralRepository();
        
        $data['clientsM'] = $clientMdb->liste();
        return $this->view->load("clientMoral/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/bpsamanemvc/clientMoral/add
     */

    public function add() {

        if (isset($_POST['valider'])) {
            
            extract($_POST);
            $data['ok'] = 0;
    
            if (!empty($_POST)) {

                $clientM = new ClientMoral();
                $clientMoralRepository = new ClientMoralRepository();
                    
                $clientM->setNom($_POST['nom']);
                $clientM->setRaisonSociale($_POST['raisonSociale']);
                $clientM->setAdresse($_POST['adresse']);
                $clientM->setTel($_POST['tel']);
                $clientM->setEmail($_POST['email']);
                $clientM->setNinea($_POST['ninea']);
                $clientM->setRegiscom($_POST['registreCommerce']);
                    

                $data['ok'] = $clientMoralRepository->add($clientM);
            }
            return $this->view->load("clientMoral/ajout", $data);
        }
        else {
                return $this->view->load("clientMoral/ajout");
            }
        }
    /** 
     * url pattern for this method
     * localhost/bpsamanemvc/clientMoral
     */
    public function findById($id) {
        $clientdb = new ClientMoralRepository;
        
        $data['client'] = $clientdb->getClient($id);
        return $this->view->load("compte/listeSingle", $data);
    }
}   