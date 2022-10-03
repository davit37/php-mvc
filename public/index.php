<?php

require_once __DIR__.'/../vendor/autoload.php';

use Davit37\PhpMvc\App\Router;
use Davit37\PhpMvc\Controller\HomeController;

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/hello", HomeController::class, "hello");
Router::add("GET", "/world", HomeController::class, "world");
Router::add("GET", "/about", HomeController::class, "about");

Router::add("GET", "/login", "UserController", "login");
Router::add("GET", "/register", "UserController", "register");

Router::run();