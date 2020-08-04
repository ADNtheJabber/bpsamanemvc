<?php
use src\model\ClientMoralRepository;
use libs\system\Controller;


class clientMoralController extends Controller {

    public function __construct() {
       parent::__construct();
    }

     /** 
     * url pattern for this method
     * localhost/projectName/Test/
     */

    public function index(){

        return $this->view->load("test/index");
    }

    public function createClientM() {

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
    }else {
        return $this->view->load("clientMoral/index");
    }

   }
    
}   