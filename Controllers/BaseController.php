<?php

namespace Controllers;

use Views\View;

class BaseController
{
    protected function render($viewPath, array $params)
    {
        new View($viewPath, $params);
    }
}