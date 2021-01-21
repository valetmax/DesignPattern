<?php 

namespace App\Adapter;

use Dotenv\Dotenv;

class VlucasDotenvAdapter implements IDotenv {
    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public function load(): void {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../../');
        $dotenv->load();
    }
}