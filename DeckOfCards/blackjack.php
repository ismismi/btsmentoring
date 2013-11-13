<?php
include_once "Deck.php"; 
include_once "Card.php"; 

class EnglishDeck extends Deck
{
	private $suits = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
	private $cards = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');
        
	public function dealCard() {
		return array_pop($this->arrCards);
	}

	public function __construct() {
		$Cards = $this->initEnglishDeck();
		parent::__construct($Cards);
	}

	function initEnglishDeck() {
		$arrCards = array();
		
		foreach($this->suits as $Suit) {
			foreach ($this->cards as $Card) {
				$arrCards[] = new Card($Suit, $Card);
			}
			
		}
		return $arrCards;

	}
    
    function compare($oCarta, $oCarta2, $oCarta3, $oCarta4) {
           $res1 = array_search($oCarta->getfigure(), $this->cards);
           $res2 = array_search($oCarta2->getfigure(), $this->cards);
           $res3 = array_search($oCarta3->getfigure(), $this->cards);
           $res4 = array_search($oCarta4->getfigure(), $this->cards);
    
            $play1 = $res1 + $res2;
            $play2 = $res3 + $res4;
        
        echo "<br/><br/>";
        echo "<br/>Player 1: " . $play1;
        echo "<br/>Player 1: " . $play2;
        
        echo "<br/><br/>";
        
        if($play1>$play2){
            echo ("Player 1 Wins!!!!!");
        }
        elseif($play1<$play2){
            echo ("Player 2 Wins, player 1, you suck!!");
        }
        
        else {
            echo "Tie!";   
        }
    }
    

}




    $oBaraja = new EnglishDeck();
    $oBaraja->shuffleCards();
    $oBaraja->listCards();

    $oCarta  = $oBaraja->dealCard();
    $oCarta2 = $oBaraja->dealCard();
    $oCarta3 = $oBaraja->dealCard();
    $oCarta4 = $oBaraja->dealCard();
    
    
        
        echo("Jugador 1: " . $oCarta . " and " . $oCarta2);
        echo ("<br/>");
        echo("Jugador 2: " . $oCarta3 . " and " . $oCarta4);
   
    $oBaraja->compare($oCarta, $oCarta2, $oCarta3, $oCarta4);
    









