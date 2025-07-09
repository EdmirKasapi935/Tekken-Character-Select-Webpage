<?php

class CharacterNode implements JsonSerializable
{

    private string $characterName;
    private CharacterNode $upperNode;
    private CharacterNode $lowerNode;
    private CharacterNode $leftNode;
    private CharacterNode $rightNode;

    public function __construct($characterName) {
         $this -> setCharacterName($characterName);
    }

    public function initNeighbors($upper, $lower, $left, $right)
    {
        $this -> setUpper($upper);
        $this -> setLower($lower);
        $this -> setLeft($left);
        $this -> setRight($right);
    }

    public function getCharacterName()
    {
        return $this->characterName;
    }

    public function getUpperCharacter()
    {
        return $this->upperNode;
    }

     public function getLowerCharacter()
    {
        return $this->lowerNode;
    }

     public function getLeftCharacter()
    {
        return $this->leftNode;
    }

     public function getRightCharacter()
    {
        return $this->rightNode;
    }
    
    public function setCharacterName($name)
    {
        $this->characterName = $name;
    }

    public function setUpper($node)
    {
        $this->upperNode = $node;
    }

     public function setLower($node)
    {
        $this->lowerNode = $node;
    }

     public function setLeft($node)
    {
        $this->leftNode = $node;
    }

     public function setRight($node)
    {
        $this->rightNode = $node;
    }

    public function jsonSerialize() :mixed
    {
        return [
            "character" => ["name" => $this -> getCharacterName(),
                             "up" => $this -> getUpperCharacter() -> getCharacterName(),
                             "down" => $this -> getLowerCharacter() -> getCharacterName(),
                             "left" => $this -> getLeftCharacter() -> getCharacterName(),
                             "right" => $this -> getRightCharacter() -> getCharacterName()]
        ];
    }
}
