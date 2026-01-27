<?php

namespace App\Core;

class Router
{

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        //https://google.com/search

        if($method == 'GET' && $uri == '/students'){
            
            return;
        }

        if($method == 'GET' && $uri == '/students/create'){
            
            return;
        }

        http_response_code(404);
        echo '<h1>404 - Page Not Found</h1>';
        
    }
    
    
}