<?php
        namespace entities;
        use Doctrine\ORM\Mapping as ORM;
        use Doctrine\Common\Collections\ArrayCollection;
        /**
        * @ORM\Entity
        * @ORM\Table(name="clientbloque")
        */
    class ClassClientBloque{
         /** 
        * @ORM\Id
        * @ORM\Column(type="integer")
        * @ORM\GeneratedValue
        */   
        private $id;
         /** 
        * @ORM\Column(type="string")
        */
        private $nom;
         /** 
        * @ORM\Column(type="string")
        */
        private $prenom;
         /** 
        * @ORM\Column(type="integer")
        */
        private $telephone;
         /** 
        * @ORM\Column(type="integer")
        */
        private $cni;
         /** 
        * @ORM\Column(type="string")
        */
        private $adresse;
         /** 
        * @ORM\Column(type="string")
        */
        private $sexe;
         /** 
        * @ORM\Column(type="date",nullable=true)
        */
        private $dateNaiss;

          /**
        * @ORM\OneToMany(targetEntity="ClassCompteBloque", mappedBy="clientBloque")
        */

        private $clientBloque;
        public function __construct()
        {
                $this->clientBloque = new ArrayCollection();
        }
        

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of telephone
         */ 
        public function getTelephone()
        {
                return $this->telephone;
        }

        /**
         * Set the value of telephone
         *
         */ 
        public function setTelephone($telephone)
        {
                $this->telephone = $telephone;

                return $this;
        }

        /**
         * Get the value of cni
         */ 
        public function getCni()
        {
                return $this->cni;
        }

        /**
         * Set the value of cni
         *
         */ 
        public function setCni($cni)
        {
                $this->cni = $cni;

                return $this;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of salaire
         */ 
        public function getSexe()
        {
                return $this->sexe;
        }

        /**
         * Set the value of salaire
         *
         */ 
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        /**
         * Get the value of dateNaiss
         */ 
        public function getDateNaiss()
        {
                return $this->dateNaiss;
        }

        /**
         * Set the value of dateNaiss
         *
         */ 
        public function setDateNaiss($dateNaiss)
        {
                $this->dateNaiss = $dateNaiss;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }




?>