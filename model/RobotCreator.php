<?php 

namespace model;

/**
 * Creator which build robot player
 */
class RobotCreator extends PlayerCreator
{
    public function createPlayer() : Player
    {
        return new RobotPlayer();
    }
}

?>