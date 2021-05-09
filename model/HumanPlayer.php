<?php

namespace model;

class HumanPlayer implements Player {
    private $_pseudo;
    private $_email;
    private $_pokeDollars;
    private $_pokeBalls;

    public function __construct($pseudo, $email){
        $this->_pseudo = $pseudo;
        $this->_email = $email;
    }
}

?>