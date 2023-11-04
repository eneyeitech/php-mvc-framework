<?php

namespace MVC;

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        
        include __DIR__ . "/Views/$view.php";
    }

    public function notfound($data) {     
        extract($data);
        
        include __DIR__ . "/Views/404.php";
    }
}