<?php

    /**
     * L'ancêtre.
     */
    class Mew {
        public ?string $capacite1 = "Tonnerre";
        public ?string $capacite2 = "Roulade";

        public function crier(): void {
            echo "Ya haaaaaa <br>";
        }
    }

    class Pikachu extends Mew {
        public string $proprietaire = "Sacha";
        public string $couleur = "Jaune";

        public function sePresenter(): void {
            echo "Pika! Je suis de couleur {$this->couleur} et mon propriétaire est {$this->proprietaire}. <br>";
        }
    }

    class Racaillou extends Mew {
        public string $proprietaire = "Pierre";
        public string $couleur = "Marron";

        public function sePresenter(): void {
            echo "Racaillou! Je suis de couleur {$this->couleur} et mon propriétaire est {$this->proprietaire}.<br>";
        }
    }

    $r1 = new Racaillou();
    $r1->sePresenter();
    $r1->crier();

    echo "----------------------------------<br>";

    $p1 = new Pikachu();
    $p1->sePresenter();
    $p1->crier();


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