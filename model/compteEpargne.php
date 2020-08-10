<?php
    namespace model;
    use entities\ClassCompteEpargne;
    // require_once 'dbConnect.php';
    // require_once '../entities/ClassCompteEpargne.php';
    class compteEpargne extends dbConnect{
            private $connexion;

            public function __construct()
            {
                parent:: __construct();
            }

       public function insertCompteEpargne(ClassCompteEpargne $compteEpargne){

        $this->base->persist($compteEpargne);
            $this->base->flush();
            // var_dump($clientSimple->getId());
            // die;
            return $compteEpargne->getId();

        // numero
        // solde
        // fraisOuvert
        // remuneration
        // dateOuverture
        // idClient
        // $numero = $compteEpargne->getNumero();
        // $solde = $compteEpargne->getSolde();
        // $fraisOuv = $compteEpargne->getFraisOuvert();
        // $remuneration = $compteEpargne->getRemuneration();
        // $dateOuv = $compteEpargne->getDateOuverture();

        // $sql = "INSERT INTO epargne(numero, solde, fraisOuvert, remuneration, dateOuverture) 
        //             VALUES ('$numero', '$solde', '$fraisOuv', '$remuneration', '$dateOuv')";

        //             if($this->base != null){
        //                 return $this->base->exec($sql); 
        //             }else{
        //             return null;
        //             }
        
        }
    }





?>