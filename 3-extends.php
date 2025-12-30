<?php

    // class Ancestor {
    //     public ?string $eyesColor = "bleue";
    //     public ?string $hairColor = "marron";

    //     public function sauter(): void {
    //         echo "L'ancêtre saute";
    //     }
    // }

    // class Enfant1 extends Ancestor {
    //     public function sauter(): void {
    //         echo "Je saute aussi haut que mon ancêtre.";
    //     }
    // }

    // class Enfant2 extends Ancestor {
    //     public ?string $eyesColor = "verte";
    // }

    // $enfant1 = new Enfant1();
    // echo $enfant1->eyesColor;

    // echo "<br>";
    
    // $enfant2 = new Enfant2();
    // echo $enfant2->eyesColor;
    // echo "<br>";

    // ------------------------------------------------------------

    class Vehicule {
        public ?string $marque = null;
        public ?string $couleur = null;
        public int $nbreRoues = 4;

        public function demarrer(): void {
            echo "Le véhicule démarre";
        }

        public function rouler(): void {
            echo "Le véhicule roule";
        }

        public function freiner(): void {
            echo "Le véhicule freine";
        }
    }

    class Voiture extends Vehicule {
        public function demarrer(): void {
            parent::demarrer();
            echo "et la voiture démarre";
        }

        public function rouler(): void {
            echo "Le voiture roule";
        }

        public function freiner(): void {
            echo "Le voiture freine";
        }
    }

    class Moto extends Vehicule {
        public function demarrer(): void {
            echo "La moto démarre";
        }

        public function rouler(): void {
            echo "Le moto roule";
        }

        public function freiner(): void {
            echo "Le moto freine";
        }
    }

    class Camion extends Vehicule {
        public function demarrer(): void {
            echo "Le camion démarre";
        }

        public function rouler(): void {
            echo "Le camion roule";
        }

        public function freiner(): void {
            echo "Le camion freine";
        }
    }

    $voiture1 = new Voiture();
    $voiture1->demarrer();

    echo "<br>";
    
    $moto1 = new Moto();
    $moto1->rouler();
    
    echo "<br>";
    
    $camion1 = new Camion();
    $camion1->demarrer();
    echo "<br>";
    $camion1->rouler();
    echo "<br>";
    $camion1->freiner();
    echo "<br>";

// ----------------------------------------------------------

    // /**
    //  * L'ancêtre.
    //  */
    // class Mew {
    //     public ?string $capacite1 = "Tonnerre";
    //     public ?string $capacite2 = "Roulade";

    //     public function crier(): void {
    //         echo "Ya haaaaaa <br>";
    //     }
    // }

    // class Pikachu extends Mew {
    //     public string $proprietaire = "Sacha";
    //     public string $couleur = "Jaune";

    //     public function sePresenter(): void {
    //         echo "Pika! Je suis de couleur {$this->couleur} et mon propriétaire est {$this->proprietaire}. <br>";
    //     }
    // }

    // class Racaillou extends Mew {
    //     public string $proprietaire = "Pierre";
    //     public string $couleur = "Marron";

    //     public function sePresenter(): void {
    //         echo "Racaillou! Je suis de couleur {$this->couleur} et mon propriétaire est {$this->proprietaire}.<br>";
    //     }
    // }

    // $r1 = new Racaillou();
    // $r1->sePresenter();
    // $r1->crier();

    // echo "----------------------------------<br>";

    // $p1 = new Pikachu();
    // $p1->sePresenter();
    // $p1->crier();


// ----------------------------------------------------------

    // class Animal {
    //     public function crier(): void {
    //         echo "L'animal crie";
    //     }
    // }

    // class Chien extends Animal {
    //     public ?string $nom = "Milou";

    //     public function aboyer(): void {
    //         echo "Ouaf Ouaf";
    //     }
    // }
    
    // class Chat extends Animal {
    //     public ?string $nom = "Miaouss";
    
    //     public function miauler(): void {
    //         echo "Miaou";
    //     }
    // }

    // $chien = new Chien();
    // $chien->crier();
    // $chien->aboyer();
    // $chien->aboyer();

    // echo "<br>";

    // $chat = new Chat();
    // $chat->miauler();