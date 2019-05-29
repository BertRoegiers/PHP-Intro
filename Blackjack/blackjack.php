<?php

session_start();

class Blackjack {
    public $score = 0;
    public $total = 0;

    public function __construct($score, $total)
    {
        $this->score = $score;
        $this->total = $total;

    }


    public function Hit()
    {

       $newCard= random_int(1, 11);
       $score += $newCard;
       return $score;

    }

    public function Stand()
    {
        // players Turn, save total points

        //dealer turn

    }
    public function Surrender() {
        //player loses, dealer wins



    }


}

$player = new Blackjack(0, 0);
echo $player->Hit();

$dealer = new Blackjack(0, 0);
echo $dealer->Hit();
