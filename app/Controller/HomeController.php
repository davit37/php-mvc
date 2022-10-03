<?php

namespace Davit37\PhpMvc\Controller;

class HomeController
{
    public function index(): void 
    {
        echo "HomeController.index()";
    }

    public function hello(): void 
    {
        echo "HomeController.hello()";
    }

    public function world(): void 
    {
        echo "HomeController.world()";
    }

    public function about(): void 
    {
        echo "Author: Davit hermansyah";
    }

}