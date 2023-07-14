<?php

use App\Http\Controllers\Web\{HomeController};
use App\Http\Controllers\Admin\{AuthController};

switch ($_SERVER['REQUEST_URI']) :
    case '/':
        $controller = new HomeController;
        echo $controller->index();
        break;
    case '/admin':
        $controller = new AuthController;
        echo $controller->login();
        break;
    default :
        header('Location: http://localhost:8080/404');exit;
endswitch;