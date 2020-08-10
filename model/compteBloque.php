<?php
    namespace model;
    use entities\ClassCompteBloque;
    // require_once 'dbConnect.php';
    // require_once '../entities/ClassCompteBloque.php';
        class compteBloque extends dbConnect{
            private $getConnexion;

            public function __construct()
            {
                parent:: __construct();
            }

            function insertCompteBloque(ClassCompteBloque $compteBloque){

                $this->base->persist($compteBloque);
                $this->base->flush();
    
                return $compteBloque->getId();
                // $numero = $compteBloque->getNumero();
                // $solde = $compteBloque->getSolde();
                // $fraisOuv = $compteBloque->getRemuneration();
                // $remuneration = $compteBloque->getRemuneration();
                // $dateOuv = $compteBloque->getDateouv();
                // $dateFerm = $compteBloque->getDateferm();

                // $sql = "INSERT INTO bloque(numero, solde, fraisouv, remuneration, dateouv, dateferm)
                //                  VALUES('$numero', '$solde', '$fraisOuv', '$remuneration', '$dateOuv', '$dateFerm')";
                //         // var_dump($sql);
                //             if($this->base != null){
                //                 return $this->base->exec($sql); 
                //             }else{
                //                 return null;
                //             }
            }

        }
 
        // solde
        // fraisouv
        // remuneration
        // dateouv
        // dateferm
?>