<?php

  class Snippit {
    private $gameName;
    private $character;

    /**
     * Sets the class obj when the class is declared
     */
    public function __construct($gameName) {
      $this->gameName = $gameName;
    }

    public function setCharacter($character) {
      $this->character = $character;
    }

    public function getHTML() {
      return("<span class='$this->gameName $this->character'></span>");
    }
  }


?>
