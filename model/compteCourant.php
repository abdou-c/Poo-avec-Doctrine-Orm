<?php 
    namespace model;
    use entities\ClassCompteCourant;
    // require_once 'dbConnect.php';
    // require_once '../entities/ClassCompteCourant.php';

    class compteCourant extends dbConnect{
        private $connexion;

        public function __construct()
        {
            parent:: __construct();
        }

        public function insertCompteCourant(ClassCompteCourant $compteCourant){

            $this->base->persist($compteCourant);
            $this->base->flush();
            
             return $compteCourant->getId();
            // var_dump($clientSimple->getId());
            // die;
          

            // $numeroCompte = $compteCourant->getNumero();
            // $solde = $compteCourant->getSolde();
            // $agios = $compteCourant->getAgios();
            // $dateOuv = $compteCourant->getDateOuvert();

            // $sql = "INSERT INTO courant(numero, solde, agios, dateOuvert)
            //              VALUES('$numeroCompte', '$solde', '$agios', '$dateOuv') ";
            //             //  var_dump($sql);

            //     if($this->base != null){
            //         return $this->base->exec($sql); 
            //     }else{
            //         return null;
            //     }
            //             }
    }
}
?>















?>