<?php

    /**
     * ***************************************************
     * La poo en php
     * 
     * @todo Les concepts clés
     *  1. La classe et les objets
     *  2. Les propriétés et les méthodes de la classe et la notion d'encapsulation
     *  3. Les accesseurs et les mutateurs et le mot clé $this
     *  4. Le constructeur
     * 
     * ***************************************************
     */


    // ------------------------------------------------------------------------------------------------
    // 1. La classe est une maquette sur laquelle l'on se base, afin de produire autant d'objets souhaités
    // class Voiture {

    // }

    
    // // 2. Les objets
    // $voiture0 = new Voiture;
    // $voiture1 = new Voiture;
    // $voiture2 = new Voiture;
    // $voiture3 = new Voiture;
    // $voiture4 = new Voiture;
    // $voiture5 = new Voiture;
    // ------------------------------------------------------------------------------------------------

    // 3. Les propriétés et les méthodes de la classe
    // class Voiture {
    //     public ?string $marque  = null;
    //     public ?string $couleur = null;

    //     public function demarrer(): void {
    //         echo "La voiture démarre";
    //     }

    //     public function rouler(): void {
    //         echo "La voiture roule";
    //     }

    //     public function freiner(): void {
    //         echo "La voiture freine";
    //     }
    // }


    // ------------------------------------------------------------------------------------------------
    // 3. Les accesseurs (getters) et les mutateurs (setters)

    // class Voiture {
    //     private ?string $marque = null;
    //     private ?string $couleur = null;

    //     public function getMarque(): string {
    //         return $this->marque;
    //     }

    //     public function setMarque(string $marque): void {
    //         $this->marque = $marque;
    //     }

    //     public function getCouleur(): string {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(string $couleur): void {
    //         $this->couleur = $couleur;
    //     }
    // }

    // $voiture0 = new Voiture;
    // $voiture0->setMarque("Fiat");
    // echo $voiture0->getMarque();

    // echo "<br>";

    // $voiture1 = new Voiture;
    // $voiture1->setMarque("Alfa Roméo");
    // $voiture1->setCouleur("noire");
    // echo "{$voiture1->getMarque()} de couleur {$voiture1->getCouleur()}";

    // echo "<br>";


    // ------------------------------------------------------------------------------------------------
    // 4. Le constructeur (fonction magique)
    // class Voiture {
    //     private ?string $marque = null;
    //     private ?string $couleur = null;

    //     public function __construct(string $marque, string $couleur)
    //     {
    //         $this->marque  = $marque;
    //         $this->couleur = $couleur;
    //     }

    //     public function getMarque(): string {
    //         return $this->marque;
    //     }

    //     public function setMarque(string $marque): void {
    //         $this->marque = $marque;
    //     }

    //     public function getCouleur(): string {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(string $couleur): void {
    //         $this->couleur = $couleur;
    //     }
    // }

    // $voiture0 = new Voiture("Ferrari", "rouge");
    // echo $voiture0->getMarque();

