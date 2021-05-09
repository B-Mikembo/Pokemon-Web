<?php

namespace model;

/**
 * Creator which build human player
 */
class HumanCreator extends PlayerCreator
{
    public function createPlayer() : Player
    {
        return new HumanPlayer();
    }
}

?>