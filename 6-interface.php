<?php


    // interface Actions
    interface Actions {
        public function respirer(): void;
        public function seNourrir(): void;
        public function dormir(): void;
        public function seReproduire(): void;
    }


    // Classe abstraite Animal
    abstract class Animal implements Actions {

        protected ?string $nom = null;
        protected ?string $age = null;

        public function respirer(): void {

        }

        public function seNourrir(): void {

        }

        public function dormir(): void {

        }

        public function seReproduire(): void {

        }
    }


    // Classes concrêtes Chien, Chat
    class Chien extends Animal {
        
    }


// --------------------------------------------------------------------


    // interface Actions {
    //     public function appeler(): void;
    //     public function envoyerMessage(): void;
    //     public function photographier(): void;
    // }

    // class Telephone implements Actions {
    //     public function appeler(): void {

    //     }

    //     public function envoyerMessage(): void {

    //     }

    //     public function photographier(): void {

    //     }
    // }

// --------------------------------------------------------------------

    // interface Actions {
    //     public function manger();
    //     public function dormir();
    //     public function crier();
    // }

    // class Chien implements Actions {
    //     public function manger() {

    //     }

    //     public function dormir() {

    //     }
    //     public function crier() {

    //     }

    //     public function courir() {

    //     }
    // }