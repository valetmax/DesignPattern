<?php
require_once "./vendor/autoload.php";

use App\User;
use App\Database\PdoSingleton;

use App\Adapter\SymfonyDotenvAdapter;
use App\Adapter\VlucasDotenvAdapter ;

$user = new User();
$user->setUser("Maxime");
$pdo = PdoSingleton::getInstance();

$dotenvSymf = new SymfonyDotenvAdapter();
$dotenvSymf->load();

var_dump($_ENV);

$dotenv = new VlucasDotenvAdapter();
$dotenv->load();

var_dump($_ENV);