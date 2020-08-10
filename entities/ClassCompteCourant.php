<?php
namespace entities;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="comptecourant")
*/

    class ClassCompteCourant{
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
        private $agios;
          /** 
        * @ORM\Column(type="date",nullable=true)
        */
        private $dateOuvert;
        
         /**
     * @ORM\ManyToOne(targetEntity="ClassClientCourant", inversedBy="compteCourant")
     * @ORM\JoinColumn(name="id_Client", referencedColumnName="id")
     */
    private $compteCourant;
        public function __construct()
        {

        }

        /**
         * Get the value of dateOuvert
         */ 
        public function getDateOuvert()
        {
                return $this->dateOuvert;
        }

        /**
         * Set the value of dateOuvert
         *
         */ 
        public function setDateOuvert($dateOuvert)
        {
                $this->dateOuvert = $dateOuvert;
        }

        /**
         * Get the value of agios
         */ 
        public function getAgios()
        {
                return $this->agios;
        }

        /**
         * Set the value of agios
         *
         */ 
        public function setAgios($agios)
        {
                $this->agios = $agios;
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
         */ 
        public function setId($id)
        {
                $this->id = $id;
        }
    }



?>