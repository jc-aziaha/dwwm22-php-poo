<?php

    abstract class Humain {
        public ?string $raison = null;

        abstract function raisonner(): void;

        public function manger(): void {
            echo "Je mange<br>";
        }
    }

    class Vendeur extends Humain {

        public array $qualites = ["commercial", "sociable"];

        public function raisonner(): void {
            echo "Le vendeur raisonne <br>";
        }

        public function vendre(): void {
            echo "Better Call Saul";
        }

        public function afficherQualites(): void {
            foreach ($this->qualites as $qualite) {
                echo $qualite . "<br>";
            }
        }
    }

    class Jardinier extends Humain {
        public array $qualites = ["main verte", "être patient"];

        public function raisonner(): void {
            echo "Le jardinier raisonne <br>";
        }

        public function planter(): void {
            echo "Le jardinier plante";
        }
    }

    class Chanteur extends Humain {
        public function raisonner(): void {
            echo "Le chanteur raisonne";
        }

        public function chanter(): void {
            echo "Allumezzzzzzz le feu";
        }
    }

    // $vendeur = new Vendeur();
    // $vendeur->manger();
    // $vendeur->afficherQualites();
    // $vendeur->raisonner();


    // $jardinier = new Jardinier();
    // $jardinier->raisonner();

    $chanteur = new Chanteur;
    $chanteur->chanter();



// -------------------------------------------------------------------------------

    // abstract class Animal {

    //     public ?string $nom = null;

    //     abstract public function crier();

    //     abstract public function chasser();

    //     public function dormir(): void {
    //         echo "L'animal dort";
    //     }
    // }

    // class Chien extends Animal {
    //     public function crier() {

    //     }

    //     public function chasser() {

    //     }
    // }

    // class Chat extends Animal {
    //     public function crier() {

    //     }

    //     public function chasser() {

    //     }
    // }