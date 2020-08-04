<?php

namespace src\model; 

use libs\system\Model;

class CompteRepository extends Model {

    public function add($compte){
        require_once "../../bootstrap.php";

        $entityManager->persist($compte);
        $entityManager->flush();

        echo "Enregistrement réussi: id du client " . $compte->getId() . "\n";
    }

    public function read(){
        require_once "../../bootstrap.php";
        
        $compteRepository = $entityManager->getRepository('Compte');
        $comptes = $compteRepository->findAll();

        foreach ($comptes as $compte) {
            echo sprintf("-%s\n", $compte->getId()," ",
                                  $compte->getNumCompte()," ",
                                  $compte->getTypeCompte()," ",
                                  $compte->getDepotInitial()
                        );
        }
    }

    public function showOne(){
        require_once "../../bootstrap.php";
        $id = $argv[1];
        $compte = $entityManager->find('compte', $numCompte);

        if ($compte === null) {
            echo "Compte inexistant !.\n";
            exit(1);
        }

        echo sprintf("-%s\n", $compte->getNumCompte()," ",
                              $compte->getId()," ",
                              $compte->getTypeCompte()," ",
                              $compte->getSolde()," ",
                              $compte->getIdClientPhysique()," ",
                              $compte->getIdClientEntreprise()
                    );
    }
}
?>