<?php
    namespace model;
    use entities\ClassClientCourant;
//on va d'abord require la base de donnees apres les entites
    // require_once 'dbConnect.php';
    // require_once '../entities/ClassClientCourant.php';
    //on va creer un class qui herite la  base de donnees
    class ClientCourant extends dbConnect{
        private $getConnexion;

        public function __construct(){
                parent:: __construct();
        }

        public function insertClientCourant(ClassClientCourant $clientCourant){

            $this->base->persist($clientCourant);
            $this->base->flush();

            return $clientCourant->getId();
            // var_dump($clientSimple->getId());
            // die;
          

        //     $nom = $ClassClientCourant->getNom();
        //     $prenom = $ClassClientCourant->getPrenom();
        //     $telephone = $ClassClientCourant->getTelephone();
        //     $cni = $ClassClientCourant->getCni();
        //     $adresse = $ClassClientCourant->getAdresse();
        //     $salaire = $ClassClientCourant->getSalaire();
        //     $sexe = $ClassClientCourant->getSexe();
        //     $dateNaiss = $ClassClientCourant->getDateNaiss();

        //     $sql = "INSERT INTO client(id, nom, prenom, telephone, cni, adresse, salaire, sexe, dateNaiss)
        //                  VALUES (null, '$nom', '$prenom', '$telephone', '$cni', '$adresse', '$salaire', '$sexe', '$dateNaiss')";
        //                 //  var_dump($sql);
        //                  if($this->base != null){
        //                     return $this->base->exec($sql); 
        //                   }else{
        //                       return null;
        //                   }
        // }  
    }
}
?>