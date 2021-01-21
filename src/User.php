<?php

namespace App;

class User {
    private $name;

    /**
     * 
     */
    public function setUser(string $user) {
        $this->name = $user;
    }
}