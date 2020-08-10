<?php
//en premier on va require le model et les entites
    use \model\clientCourant;
    use \entities\ClassClientCourant;
    require_once '../config/autoloader.php';
    require_once "../vendor/autoload.php";


    use model\compteCourant;
    use entities\ClassCompteCourant;
    require_once '../config/autoloader.php';    
    // require_once '../model/clientCourant.php';
    // require_once '../entities/ClassClientCourant.php';

    // require_once '../model/compteCourant.php';
    // require_once '../entities/ClassCompteCourant.php';

$courant = FALSE;


if(!empty($_POST)){
    $clientCourant = new ClassClientCourant();
    $modelCourant = new ClientCourant();
    //apres on va commencer a recuperer les names

    $clientCourant->setNom($_POST['nomClient']);
    $clientCourant->setPrenom($_POST['prenomClient']);
    $clientCourant->setTelephone($_POST['callClient']);
    $clientCourant->setCni($_POST['numCniClient']);
    $clientCourant->setAdresse($_POST['adresseClient']);
    $clientCourant->setSalaire($_POST['Salaire']);
    $clientCourant->setSexe($_POST['sexeCourant']);
    $clientCourant->setDateNaiss(null);
//resultat
    $resultat = $modelCourant->insertClientCourant($clientCourant);



     if($resultat != null){
          echo "client enregistrer";
          $courant=TRUE;
      }
      else{
          echo "client non enregistrer!";
        }
if($courant == true){
    $compteCourant = new ClassCompteCourant();
    $modelCourant = new compteCourant();

    $compteCourant->setNumero($_POST['numberCompte']);
    $compteCourant->setSolde($_POST['solde']);
    $compteCourant->setAgios($_POST['agios']);
    $compteCourant->setDateOuvert(null);

    $resultat = $modelCourant->insertCompteCourant($compteCourant);

    if($resultat != null){
        echo "compte enregistrer";
    }else{
        echo "compte non enregistrer!";
    }
}
}
?>