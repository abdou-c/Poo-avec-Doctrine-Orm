<?php
        namespace entities;
        use Doctrine\ORM\Mapping as ORM;
         /**
        * @ORM\Entity
        * @ORM\Table(name="comptebloque")
        */
    class ClassCompteBloque{
            /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */   
        private $id;
         /** 
        * @ORM\Column(type="integer")
        */
        private $numero;
         /** 
        * @ORM\Column(type="integer")
        */
        private $solde;
         /** 
        * @ORM\Column(type="integer")
        */
        private $fraisouv;
         /** 
        * @ORM\Column(type="integer")
        */
        private $remuneration;
         /** 
        * @ORM\Column(type="date",nullable=true)
        */
        private $dateouv;
         /** 
        * @ORM\Column(type="date",nullable=true)
        */
        private $dateferm;

            /**
     * @ORM\ManyToOne(targetEntity="ClassClientBloque", inversedBy="compteBloque")
     * @ORM\JoinColumn(name="id_Client", referencedColumnName="id")
     */
    private $compteBloque;

        public function __construct()
        {

        }

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of remuneration
         */ 
        public function getRemuneration()
        {
                return $this->remuneration;
        }

        /**
         * Set the value of remuneration
         *
         */ 
        public function setRemuneration($remuneration)
        {
                $this->remuneration = $remuneration;

                return $this;
        }

        /**
         * Get the value of fraisouv
         */ 
        public function getFraisouv()
        {
                return $this->fraisouv;
        }

        /**
         * Set the value of fraisouv
         *
         */ 
        public function setFraisouv($fraisouv)
        {
                $this->fraisouv = $fraisouv;

                return $this;
        }

        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }

        /**
         * Set the value of solde
         *
         */ 
        public function setSolde($solde)
        {
                $this->solde = $solde;

                return $this;
        }

        /**
         * Get the value of dateferm
         */ 
        public function getDateferm()
        {
                return $this->dateferm;
        }

        /**
         * Set the value of dateferm
         *
         */ 
        public function setDateferm($dateferm)
        {
                $this->dateferm = $dateferm;

                return $this;
        }

        /**
         * Get the value of dateouv
         */ 
        public function getDateouv()
        {
                return $this->dateouv;
        }

        /**
         * Set the value of dateouv
         *
         */ 
        public function setDateouv($dateouv)
        {
                $this->dateouv = $dateouv;

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