<?php 

namespace App\Adapter;

use Symfony\Component\Dotenv\Dotenv;

class SymfonyDotenvAdapter implements IDotenv {
    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public function load(): void {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__.'/../../.env');
    }
}