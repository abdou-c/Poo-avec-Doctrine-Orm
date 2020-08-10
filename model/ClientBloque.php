<?php   
    namespace model;
     use entities\ClassClientBloque;
    // require_once 'dbConnect.php';
    // require_once '../entities/ClassClientBloque.php';

    class clientBloque extends dbConnect{
        private $database;
        public function __construct()
        {
            parent::__construct();
        }
        public function insertClientBloque(ClassClientBloque $clientBloque){

            
            $this->base->persist($clientBloque);
            $this->base->flush();

            return $clientBloque->getId();
            // $nom = $ClassClientBloque->getNom();
            // $prenom = $ClassClientBloque->getPrenom();
            // $numCall = $ClassClientBloque->getTelephone();
            // $identification = $ClassClientBloque->getCni();
            // $adresseMail = $ClassClientBloque->getAdresse();
            // $sexe = $ClassClientBloque->getSexe();
            // $dateNaiss = $ClassClientBloque->getDateNaiss();

            // $sql = "INSERT INTO client(id, nom, prenom, telephone, cni, adresse, sexe, dateNaiss)
            //                  VALUES(null, '$nom', '$prenom', '$numCall', '$identification', '$adresseMail', '$sexe', '$dateNaiss')";
            //                   if($this->base != null){
            //                     return $this->base->exec($sql); 
            //                   }else{
            //                       return null;
            //                   }
        }
        
    }

?>