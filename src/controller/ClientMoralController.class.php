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
        
        $data['tests'] = $clientMdb->liste();
        return $this->view->load("test/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/bpsamanemvc/clientMoral/add
     */

    public function add() {

    if (isset($_POST) && !empty($_POST)) {

        extract($_POST);
        $data['ok'] = 0;

        $clientM = new ClientMoral();
        $clientMoralRepository = new ClientMoralRepository();
            
        $clientM->setNom($_POST['nomEntreprise']);
        $clientM->setAdresse($_POST['adresseEntreprise']);
        $clientM->setTel($_POST['telEntreprise']);
        $clientM->setEmail($_POST['emailEntreprise']);
        $clientM->setNinea($_POST['ninea']);
        $clientM->setRegiscom($_POST['regiscommerce']);
            

        $log = $clientMoralRepository->add($clientM);

            // var_dump($log);
            
        if ($log) {
            $data['ok'] = $log;

            return $this->view->load("clientMoral/ajout", $data);
        } else {
            return $this->view->load("clientMoral/ajout");
        }
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