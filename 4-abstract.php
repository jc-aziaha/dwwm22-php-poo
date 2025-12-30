<?php

    abstract class Animal {

        public ?string $nom = null;

        abstract public function crier();

        abstract public function chasser();

        public function dormir(): void {
            echo "L'animal dort";
        }
    }

    class Chien extends Animal {
        public function crier() {
            
        }

        public function chasser() {

        }
    }

    class Chat extends Animal {
        public function crier() {

        }

        public function chasser() {

        }
    }

    new Animal;