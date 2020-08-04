<?php

namespace src\model; 

use libs\system\Model;

class ClientMoralRepository extends Model {

    public function add($clientM){
        require_once "../../bootstrap.php";

        $entityManager->persist($clientM);
        $entityManager->flush();

        echo "Enregistrement réussi: id du client " . $clientM->getId() . "\n";
    }

    public function read(){
        require_once "../../bootstrap.php";
        
        $clientMRepository = $entityManager->getRepository('ClientMoral');
        $clients = $clientMRepository->findAll();

        foreach ($clients as $client) {
            echo sprintf("-%s\n", $client->getNom()," ",
                                  $client->getAdresse()," ",
                                  $client->getTelephone()," ",
                                  $client->getEmail()
                        );
        }
    }

    public function showOne(){
        require_once "../../bootstrap.php";
        
        $id = $argv[1];
        $client = $entityManager->find('clientMoral', $id);

        if ($client === null) {
            echo "Client introuvable !.\n";
            exit(1);
        }

        echo sprintf("-%s\n", $client->getNom()," ",
                              $client->getAdresse()," ",
                              $client->getTelephone()," ",
                              $client->getEmail()
                    );
    }
}
?>