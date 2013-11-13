<?php
abstract class Deck
{
	protected $arrCards;
	protected $listOfCards;

	/* abstract methods force classes that extends this class to implement them */
	abstract public function dealCard();


	/* already implemented methods */
	public function __construct($Cards) {
		$this->arrCards = $Cards;
	}

	public function shuffleCards() {
		shuffle($this->arrCards);
	}

	public function listCards() {
		foreach($this->arrCards as $Card) {
			//echo $Card . '<br />';
		}
	}





}

