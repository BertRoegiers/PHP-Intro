<?php



class Blackjack {
    public $playesScore = 0;
    public $playerTotal = 0;
    public $dealerScore = 0;
    public $dealerTotal = 0;

    public function Hit() {
       $newCard= random_int(1, 11);
       $playerScore += $newCard;
       return $playerScore;

    }
    public function Stand() {
        // players Turn, save total points

        //dealer turn

    }
    public function Surrender() {
        //player loses, dealer wins



    }


}

$test = new Blackjack;
echo $test->Hit();