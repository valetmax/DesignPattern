<?php

namespace App\Entity;

use App\Entity;

class Bonnet extends Entity {
    private string $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    private function setName(string $name): self {
        $this->name = $name;
        $this->entityObserver->notify('setName call');
        return $this;
    }
}