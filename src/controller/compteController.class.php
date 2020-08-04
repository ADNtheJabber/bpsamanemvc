<?php
    require_once '../../config/autoload.php';
        
    use libs\system\Controller;
    use src\model\ClientPhysiqueRepository;
use src\model\CompteRepository;

extract($_POST);

    if (isset($_POST)) {

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
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue';
            }
        }