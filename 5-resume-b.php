<?php

    
    /**
     * ***************************************************
     * La poo en php
     * 
     * @todo Les concepts clés
     *  5. Les classes et méthodes statiques
     *  6. La notion d'héritage
     *  7. Les classes abstraites
     * ***************************************************
     */


    // 5. Les classes et méthodes statiques
    // class Voiture {
    //     public null|string $marque = null;
    //     public null|string $couleur = null;
    //     public static int $nbreInstances = 0;

    //     public function __construct()
    //     {
    //         self::$nbreInstances++;
    //     }

    //     public static function demarrer() {
    //         echo "La voiture démarre";
    //     }
    // }

    // $voiture0 = new Voiture();
    // $voiture1 = new Voiture();
    // echo Voiture::$nbreInstances;

    // $voiture2 = new Voiture;
    // $voiture2->demarrer();
    // Voiture::demarrer();


    // ------------------------------------------------------------------------
    // 6. La notion d'héritage

    // class Vehicule {
    //     public function demarrer(): void {
    //         echo "Le véhicule démarre";
    //     } 

    //     public function rouler(): void {
    //         echo "Le véhicule roule";
    //     }

    //     public function freiner(): void {
    //         echo "Le véhicule freine";
    //     } 
    // }

    // class Voiture extends Vehicule {
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

    // class Moto extends Vehicule {
    //     public function demarrer(): void {
    //         echo "La moto démarre";
    //     } 

    //     public function rouler(): void {
    //         echo "La moto roule";
    //     }

    //     public function freiner(): void {
    //         echo "La moto freine";
    //     } 
    // }

    // class Camion extends Vehicule {
    //     public function demarrer(): void {
    //         echo "Le camion démarre";
    //     } 

    //     public function rouler(): void {
    //         echo "Le camion roule";
    //     }

    //     public function freiner(): void {
    //         echo "Le camion freine";
    //     } 
    // }



    // ------------------------------------------------------------------------
    // 7. Les classes abstraites

    // abstract class Vehicule {

    //     protected null|string $marque = null;
    //     protected null|string $couleur = null;

    //     abstract public function demarrer(): void;

    //     abstract public function rouler(): void;

    //     abstract public function freiner(): void;

    //     public function voler(): void {
    //         echo "Le véhicule peut voler";
    //     }
    // }

    // class Voiture extends Vehicule {

    //     protected null|string $marque = "Tesla";
    //     protected null|string $couleur = null;

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

    // class Moto extends Vehicule {
    //     public function demarrer(): void {
    //         echo "La moto démarre";
    //     } 

    //     public function rouler(): void {
    //         echo "La moto roule";
    //     }

    //     public function freiner(): void {
    //         echo "La moto freine";
    //     } 
    // }

    // class Camion extends Vehicule {
    //     public function demarrer(): void {
    //         echo "Le camion démarre";
    //     } 

    //     public function rouler(): void {
    //         echo "Le camion roule";
    //     }

    //     public function freiner(): void {
    //         echo "Le camion freine";
    //     } 
    // }
    
    



