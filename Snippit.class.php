<?php

  class Snippit {
    private $gameName;
    private $character;

    protected function setGame($gameName) {
      $this->gameName = $gameName;
    }

    protected function setCharacter($char) {
      $this->character = $char;
    }

    public function getHTML() {
      return("<span class='{$this->gameName} {$this->character}'></span>");
    }

    /**
     * To convert the obj to a string if there is a echo
     * @return string [description]
     */
    public function __toString() {
      return("<span class='{$this->gameName} {$this->character}'></span>");
    }

    public function walk() {
      return('walk');
    }
  }

  class Mario extends Snippit {

    public function __construct() {
      $this->setGame('mario-kart-character');
      $this->setCharacter('mario');
    }

    public function jump() {
      return('Jump');
    }
  }

  class Lugui extends Snippit{
    public function __construct() {
      $this->setGame('mario-kart-character');
      $this->setCharacter('lugiu');
    }

    public function swim() {
      return('swim');
    }
  }
  $Mario = new Mario();
  echo $Mario->walk();
  echo "<br>";
  echo $Mario->jump();
  echo "<br>";
  echo "<br>";
  $Lugui = new Lugui();
  echo "Lui:" . $Lugui->swim();


?>
