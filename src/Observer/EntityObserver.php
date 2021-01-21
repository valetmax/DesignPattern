<?php

namespace App\Observer;

class EntityObserver {
    public function notify(string $message) {
        echo $message;
    }
}