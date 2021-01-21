<?php

namespace App;

use App\Observer\EntityObserver;

abstract class Entity {
    private array $entitiesObservers = [];

    public function __construct()
    {
        $this->entitiesObservers[] = new EntityObserver();
    }

    public function subscribe(EntityObserver $entityObserver) {
        $this->entitiesObservers[] = $entityObserver;
    }

    public function unsubscribe(EntityObserver $entityObserver) {
        $key = array_search($entityObserver, $this->entitiesObservers);
        unset($this->entitiesObservers[$key]);
    }
}